#include "Robot_nav.h"

#define PI 3.14159265
//using namespace Stg;
using namespace stage_controllers;
//int Robot_nav::sensorFailure=0;

void Robot_nav::run(ros::NodeHandle *nh, std::string s1) {
    this->n = nh;

    this->robotName = s1;

    this->rateCond = 0;
    this->prev_distance = 0.0;

    //----------------- these values need to be initialized automatically then update the position of robot accordingly
    this->resolutionOfMapPerPoint = 50;
    this->locationX = 97;
    this->locationY = 147;

    this->degreePerSample = 0.01;
    this->maxRange = 255;                  //------ range is 5.1 ie: (5.2-(1/(2*resolutionOfMapPerPoint)))*resolutionOfMapPerPoint=51.5, sqrt(2) is the other half of referred pixel
    this->rangerMaxRange = 259.5;           //------ range is 5.2 ie: (5.2-0.05)*10=51.5

    this->orientation = 0;
    this->robot_size = 14;                   //------ (0.25-0.01)*50=12
    this->mask_size = 2*this->robot_size;

    this->mapSize = 1200;
    this->mappedArea = Mat(this->mapSize, this->mapSize, CV_8UC1, Scalar::all(255));
    this->perPixelMidPoint = 1 / (2 * this->resolutionOfMapPerPoint);

    namedWindow("normal", WINDOW_NORMAL);              //-------- window for debugging

    this->move_publisher = this->n->serviceClient<stage_controllers::CallStageRos>(this->robotName + "cmd_vel");

    while (ros::ok()) {
        this->laser_subscriber_forScanning = this->n->subscribe<sensor_msgs::LaserScan>(this->robotName + "base_scan",
                                                                                        0,
                                                                                        boost::bind(&Robot_nav::mapArea,
                                                                                                    this, _1));
        //this->laser_subscriber_forMoving = n->subscribe<sensor_msgs::LaserScan>(this->robotName+"base_scan", 1000, boost::bind(&Robot_nav::move, this, _1));

        ros::spin();
    }
}

void Robot_nav::move(int x_dest, int y_dest) {
    //--------------------------------------------------
    // Avoid obstacles when moving to destination
    // Find a more robust way to move

    std::cout << "Moving to (" << x_dest << "," << y_dest << ")" << std::endl;
    int x_direction = (x_dest - this->locationX) > 0 ? 1 : -1;
    int y_direction = (y_dest - this->locationY) > 0 ? 1 : -1;

    // For y
    double diffInOrientation = ((acos(y_direction) * 180 / PI) + 90) - this->orientation;
    int directionOfRotation = diffInOrientation > 0 ? 1 : -1;
    std::cout << "difference = " << diffInOrientation << std::endl;
    std::cout << "direction = " << directionOfRotation << std::endl;
    std::cout << "times = " << (abs(diffInOrientation / 90)) << std::endl;

    ros::ServiceClient client = this->n->serviceClient<stage_controllers::CallStageRos>("CallToStage",true);
    stage_controllers::CallStageRos srv;
    srv.request.robotName = this->robotName;
    srv.request.functionName = "rotateRobot";
    srv.request.linearX = 0;
    srv.request.linearY = 0;
    srv.request.angularZ = diffInOrientation * PI / 180.0;
    if (client.call(srv)) {
        this->orientation = this->orientation + diffInOrientation;
    }
    else {
        ROS_ERROR("Failed to call service CallToStage [1]");
    }

    int limit = abs(y_dest - this->locationY);
    float inc_dec=((float)1.0 / this->resolutionOfMapPerPoint) * y_direction;
    for (int i = 0; i < limit; i++) {
        client.shutdown();
        client = this->n->serviceClient<stage_controllers::CallStageRos>("CallToStage",true);
        srv.request.robotName = this->robotName;
        srv.request.functionName = "moveRobot";
        srv.request.linearX = 0.0;
        srv.request.linearY = inc_dec;
        srv.request.angularZ = 0.0;
        if (client.call(srv)) {
            this->locationY = this->locationY + (1 * y_direction);
        }
        else {
            ROS_ERROR("Failed to call service CallToStage [2]");
        }
        waitKey(15);
    }


    // For x
    diffInOrientation = ((acos(x_direction) * 180 / PI)) - this->orientation;
    directionOfRotation = diffInOrientation > 0 ? 1 : -1;
    std::cout << "difference = " << diffInOrientation << std::endl;
    std::cout << "direction = " << directionOfRotation << std::endl;
    std::cout << "times = " << (abs(diffInOrientation / 90)) << std::endl;

    srv.request.robotName = this->robotName;
    srv.request.functionName = "rotateRobot";
    srv.request.linearX = 0;
    srv.request.linearY = 0;
    srv.request.angularZ = diffInOrientation * PI / 180.0;
    if (client.call(srv)) {
        this->orientation = this->orientation + diffInOrientation;
    }
    else {
        ROS_ERROR("Failed to call service CallToStage [3]");
    }

    limit = abs(x_dest - this->locationX);
    inc_dec=((float)1.0 / this->resolutionOfMapPerPoint) * x_direction;
    for (int i = 0; i < limit; i++) {
        client.shutdown();
        client = this->n->serviceClient<stage_controllers::CallStageRos>("CallToStage",true);
        srv.request.robotName = this->robotName;
        srv.request.functionName = "moveRobot";
        srv.request.linearX = inc_dec;
        srv.request.linearY = 0.0;
        srv.request.angularZ = 0.0;
        if (client.call(srv)) {
            this->locationX = this->locationX + (1 * x_direction);
        }
        else {
            ROS_ERROR("Failed to call service CallToStage [4]");
        }
        waitKey(15);
    }


/*
   this->distanceToObstacles=10.0;
   for(int it=15750;it<=20250;it++)
      if(range[it]<this->distanceToObstacles)
         this->distanceToObstacles=range[it];
   if(this->distanceToObstacles>2.0)
   {
      geometry_msgs::Twist msg;
      msg.linear.x=1.0;

      //---------------------------------------------------
      // Consider orientation to either inc/dec locationX or locationY

      this->locationY=this->locationY+50;

      this->move_publisher.publish(msg);
   }
   else
   {
      if(rand()%2==0)
      {
        geometry_msgs::Twist msg;
        msg.linear.x=0.0;
        msg.angular.z=8.25;
        this->move_publisher.publish(msg);
      }
      else
      {
        geometry_msgs::Twist msg;
        msg.linear.x=0.0;
        msg.angular.z=-8.25;
        this->move_publisher.publish(msg);
      }
   }
*/
}

void Robot_nav::mapArea(const boost::shared_ptr<sensor_msgs::LaserScan const> &range) {
    //if (this->rateCond <= 0) {
        //--------------------------------------
        // Moving 0.1m and scanning 4 times, to get a better border and then efficiently find the open space

        //boost::thread t1 = boost::thread(boost::bind(&Robot_nav::createMap,this,range->ranges));
        this->createMap(range->ranges);

        //--------------------------------------------
        // Use this function to get a perfect map for current location
        //this->move_aMeter(range->ranges);

        //ros::getGlobalCallbackQueue()->clear();

        this->findOpenSpace();
        this->rateCond++;
    //}
    //---------------------------------
    // unsubscribe and then re-subscribe to remove all the old callbacks
    this->laser_subscriber_forScanning.shutdown();
    this->laser_subscriber_forScanning = this->n->subscribe<sensor_msgs::LaserScan>(this->robotName + "base_scan", 0,
                                                                                    boost::bind(&Robot_nav::mapArea,
                                                                                                this, _1));
    imwrite("src/stage_controllers/Map_Image.jpg", this->mappedArea);
}

void Robot_nav::findOpenSpace() {
    //Find the 10 shortest destinations and then randomly select one

    int i, j;
    int count = 0;
    std::vector<int> x_value;
    std::vector<int> y_value;
    std::vector<float> dist;
    for (i = 0; i < this->mappedArea.rows - this->mask_size; ++i) {
        for (j = 0; j < this->mappedArea.cols - this->mask_size; ++j) {
            double min_wholeMask, max_wholeMask;
            minMaxLoc(this->mappedArea(Range(i, i + this->mask_size), Range(j, j + this->mask_size)), &min_wholeMask,
                      &max_wholeMask);
            if (min_wholeMask > 1.0 && max_wholeMask == 255.0) {
                double min_robotMask, max_robotMask;
                minMaxLoc(this->mappedArea(Range((i + floor((this->robot_size) / 4)), (i + (this->mask_size - floor(( this->robot_size) / 4)))), Range((j + floor((this->robot_size) / 4)), (j + (this->mask_size - floor(( this->robot_size) / 4))))), &min_robotMask, &max_robotMask);
                if (min_robotMask == 127.0 && max_robotMask == 127.0) {
                    count++;
                    int y_robot = (this->mapSize - 1) - (i + ((this->mask_size - 1) / 2));
                    int x_robot = j + ((this->mask_size - 1) / 2);
                    float distance = sqrt(pow((y_robot - this->locationY), 2) + pow((x_robot - this->locationX), 2));
                    if (dist.size() < 10) {
                        if (dist.size() == 0) {
                            x_value.push_back(x_robot);
                            y_value.push_back(y_robot);
                            dist.push_back(distance);
                        }
                        else {
                            if (dist[dist.size() - 1] > distance) {
                                x_value.push_back(x_robot);
                                y_value.push_back(y_robot);
                                dist.push_back(distance);
                                dist[dist.size() - 1] = dist[dist.size() - 2];
                                x_value[dist.size() - 1] = x_value[dist.size() - 2];
                                y_value[dist.size() - 1] = y_value[dist.size() - 2];
                                dist[dist.size() - 2] = distance;
                                x_value[dist.size() - 2] = x_robot;
                                y_value[dist.size() - 2] = y_robot;
                            }
                            else {
                                x_value.push_back(x_robot);
                                y_value.push_back(y_robot);
                                dist.push_back(distance);
                            }
                        }
                    }
                    else {
                        if (dist[dist.size() - 1] > distance) {
                            dist[dist.size() - 1] = distance;
                            x_value[dist.size() - 1] = x_robot;
                            y_value[dist.size() - 1] = y_robot;
                        }
                    }
                    j = j + this->mask_size;
                }
            }
        }
    }
/*
    for(i=0;i<dist.size();i++)
    {
      uchar* p=this->mappedArea.ptr<uchar>((this->mapSize-1)-y_value[i]);
      p[x_value[i]]=63; 
    }
*/
    std::cout << "Done Scanning for Open Space..." << std::endl;
    int random_index = rand() % 10;
    this->move(x_value[random_index], y_value[random_index]);
}

void Robot_nav::move_aMeter(std::vector<float> range) {
    //---------------------------------------------------
    // this function changes when resolution changes

    this->distanceToObstacles = 10.0;
    for (int it = 15750; it <= 20250; it++)
        if (range[it] < this->distanceToObstacles)
            this->distanceToObstacles = range[it];
    if (this->distanceToObstacles > 0.5) {
        stage_controllers::CallStageRos srv;
        srv.request.linearX = 0.1;                      //------- For 0.1 m/s it moves 0.02meter
        if (this->move_publisher.call(srv)) {
            std::cout << "Result : " << srv.response.result << std::endl;
        }
        else {
            ROS_ERROR("Failed to call service CallToStage");
        }

        //------- For inc of 0.02 meter, inc/dec pixel by 1
        if (this->orientation == 90 || this->orientation == 270) {
            if (this->orientation == 90)
                this->locationY = this->locationY + 1;
            else
                this->locationY = this->locationY - 1;
        }
        else {
            if (this->orientation == 0)
                this->locationX = this->locationX + 1;
            else
                this->locationX = this->locationX - 1;
        }
    }
}

void Robot_nav::createMap(std::vector<float> range) {
    //------------- Reference from pt of view of samples from ranger
    float sampleRefAngle = 0.0;
    float angleFromStartSample =
            (180.0 + this->orientation) > 360 ? (180.0 + this->orientation) - 360 : (180.0 + this->orientation);

    //------------- Rotate a point by 90 deg to map it to Mat container
    uchar *p = this->mappedArea.ptr<uchar>((this->mapSize - 1) - this->locationY);
    p[this->locationX] = 127;

    //------------- Start from +ve 'x' axis as a frame of reference
    int x = round(((this->maxRange) * cos(angleFromStartSample * PI / 180.0))) + this->locationX;
    int y = round(((this->maxRange) * sin(angleFromStartSample * PI / 180.0))) + this->locationY;
    int xInitial, yInitial;

    while (sampleRefAngle <= 45 && ros::ok()) {

        xInitial = x;
        yInitial = y;
        //std::cout<< "y = " << y <<" & x = " << x <<std::endl;

        int samplePoint;
        float distanceInPixel, copyOfSampleRefAngle = sampleRefAngle;
        bool xinc, obstacle;
        int obstacleX, obstacleY;

        if ((angleFromStartSample >= 45.0 && angleFromStartSample < 135.0) ||
            (angleFromStartSample >= 225.0 && angleFromStartSample < 315.0))
            xinc = true;
        else
            xinc = false;

        //---------------- find pixels covered by current sample point and find sample points for 8 other points
        double sizeOfEachPixel = (xinc) ? ((double) sqrt(pow((x - this->locationX), 2) + pow((y - this->locationY), 2)) /
                                          abs(y - this->locationY)) : (
                                        (double) sqrt(pow((x - this->locationX), 2) + pow((y - this->locationY), 2)) /
                                        abs(x - this->locationX));
        for (int i = 0; i < 360; i = i + 90) {
            float theta =
                    (copyOfSampleRefAngle + i) > 360 ? (copyOfSampleRefAngle + i) - 360 : (copyOfSampleRefAngle + i);
            samplePoint = round((float) theta / this->degreePerSample);
            //samplePoint=(samplePoint>(360/this->degreePerSample))?(samplePoint-(360/this->degreePerSample)):samplePoint;
            distanceInPixel = ((range[samplePoint]) - (1.0 / (2 * this->resolutionOfMapPerPoint))) *
                              this->resolutionOfMapPerPoint;
            //std::cout<< "Current pixel value is :("<<x<<","<<y<<")"<<std::endl;
            obstacle = false;

            //-------------- assign values to map vector
            float slope = (float) (y - this->locationY) / (x - this->locationX);
            float b = (float) ((x * this->locationY) - (this->locationX * y)) / (x - this->locationX);
            int rangerDistanceInPixelCount = round(((double) (distanceInPixel / sizeOfEachPixel)));
/*
                  std::cout<< "Current pixels slope ="<<slope<<" and b="<<b<<std::endl;
                  std::cout<< "Sample point for current pixel :"<<samplePoint<<std::endl;
                  std::cout<< "Ranger reading(pixels) for Current pixel is :"<<distanceInPixel<<std::endl;
                  std::cout<< "Size of each pixel for current distance :"<<sizeOfEachPixel <<std::endl;
                  std::cout<< "Current pixels angle from start position (+ve x-axis) :"<<(angleFromStartSample+i)<<std::endl;
                  std::cout<< "Current pixels angle from start position of ranger :"<<theta<<std::endl;
                  std::cout<< "Current pixels range count(pixels) :"<< rangerDistanceInPixelCount <<std::endl;
*/
            std::vector<int> linex;
            std::vector<int> liney;
            liney.push_back(this->locationY);
            linex.push_back(this->locationX);
            int currentCountOfPixel = 0;

            float angleFromRefAxis = ((angleFromStartSample) + i) > 360 ? ((angleFromStartSample) + i) - 360 : (
                    ((angleFromStartSample) + i) < 0 ? ((angleFromStartSample) + i) + 360 : ((angleFromStartSample) +
                                                                                             i));

            //-------------- assign values to map vector
            if (this->locationX == x || this->locationY == y) {
                int xAxis = (angleFromRefAxis >= 90 && angleFromRefAxis < 270) ? -1 : 1;
                int yAxis = (angleFromRefAxis >= 180 && angleFromRefAxis < 360) ? -1 : 1;
                if (this->locationX == x) {
                    liney.push_back(this->locationY + (rangerDistanceInPixelCount * yAxis));
                    linex.push_back(x);
                    //for(int yv=0;yv<liney.size();yv++)
                    //std::cout<< ">>>>>>>>>>>>>" << linex[yv] <<"," << liney[yv] <<std::endl;

                    for (int yv = 1; yv < liney.size(); yv++) {
                        //------------- x co-ordinates for Mat objects
                        int x1 = ((this->mapSize - 1) - liney[yv - 1]);
                        int x2 = ((this->mapSize - 1) - liney[yv]);

                        if (x1 < x2)
                            this->mappedArea(Range(x1, x2), Range(linex[yv - 1], linex[yv - 1] + 1)).setTo(127);
                        else
                            this->mappedArea(Range(x2, x1), Range(linex[yv - 1], linex[yv - 1] + 1)).setTo(127);
                    }
                    //**************
                    if (distanceInPixel < (this->rangerMaxRange)) {
                        int x1 = ((this->mapSize - 1) -
                                  (this->locationY + (rangerDistanceInPixelCount * yAxis)));
                        this->mappedArea(Range(x1, x1 + 1), Range(x, x + 1)).setTo(0);
                    }
                }
                else {
                    linex.push_back(this->locationX + (rangerDistanceInPixelCount * xAxis));
                    obstacleX = this->locationX + (rangerDistanceInPixelCount * xAxis);
                    liney.push_back(y);
                    //for(int xv=0;xv<liney.size();xv++)
                    //std::cout<< ">>>>>>>>>>>>>" << linex[xv] <<"," << liney[xv] <<std::endl;

                    for (int xv = 1; xv < liney.size(); xv++) {
                        //------------- x co-ordinates for Mat objects
                        int x1 = ((this->mapSize - 1) - liney[xv - 1]);

                        if (linex[xv] < linex[xv - 1])
                            this->mappedArea(Range(x1, x1 + 1), Range(linex[xv], linex[xv - 1] + 1)).setTo(127);
                        else
                            this->mappedArea(Range(x1, x1 + 1), Range(linex[xv - 1], linex[xv] + 1)).setTo(127);
                    }
                    //**************
                    if (distanceInPixel < (this->rangerMaxRange)) {
                        int x1 = ((this->mapSize - 1) - y);
                        this->mappedArea(Range(x1, x1 + 1), Range(obstacleX, obstacleX + 1)).setTo(0);
                    }
                }
            }
            else {
                //****************************
                int xAxis = (angleFromRefAxis >= 90 && angleFromRefAxis < 270) ? -1 : 1;
                int yAxis = (angleFromRefAxis >= 180 && angleFromRefAxis < 360) ? -1 : 1;
                if ((angleFromRefAxis >= 45.0 && angleFromRefAxis < 135.0) ||
                    (angleFromRefAxis >= 225.0 && angleFromRefAxis < 315.0)) {
                    for (float yx = this->locationX;
                         abs(yx - this->locationX) <= abs(x - this->locationX); yx = yx + xAxis) {
                        if (yx != x) {
                            yx = yx + (0.5 * xAxis);
                            liney.push_back(round(((slope * yx) + b)));
                            if ((currentCountOfPixel = currentCountOfPixel +
                                                       abs(liney[liney.size() - 1] - liney[liney.size() - 2])) >=
                                rangerDistanceInPixelCount) {
                                obstacleY = this->locationY + (rangerDistanceInPixelCount * yAxis);
                                if(currentCountOfPixel>rangerDistanceInPixelCount){
                                    obstacleX = yx - (0.5 * xAxis);
                                }
                                else {
                                    obstacleX = yx - (0.5 * xAxis) + xAxis;
                                }
                                liney[liney.size() - 1] = this->locationY + (rangerDistanceInPixelCount * yAxis);
                                linex.push_back(yx - (0.5 * xAxis) + xAxis);
                                break;
                            }
                            yx = yx - (0.5 * xAxis);
                            linex.push_back(yx + xAxis);
                        }
                        else {
                            liney.push_back(y);
                            if ((currentCountOfPixel = currentCountOfPixel +
                                                       abs(liney[liney.size() - 1] - liney[liney.size() - 2])) >=
                                rangerDistanceInPixelCount) {
                                liney[liney.size() - 1] = this->locationY + (rangerDistanceInPixelCount * yAxis);
                                linex.push_back(x);
                                //**************
                                obstacleY = this->locationY + (rangerDistanceInPixelCount * yAxis);
                                if(currentCountOfPixel>rangerDistanceInPixelCount){
                                     obstacleX = x;
                                }
                                else{
                                     obstacleX = x+xAxis;
                                }
                                break;
                            }
                            linex.push_back(x);
                        }
                    }
                    //for(int yv=0;yv<liney.size();yv++)
                    //std::cout<< ">>>>>>>>>>>>>" << linex[yv] <<"," << liney[yv] <<std::endl;

                    for (int yv = 1; yv < liney.size(); yv++) {
                        //------------- x co-ordinates for Mat objects
                        int x1 = ((this->mapSize - 1) - liney[yv - 1]);
                        int x2 = ((this->mapSize - 1) - liney[yv]);

                        if (x1 < x2)
                            this->mappedArea(Range(x1, x2), Range(linex[yv - 1], linex[yv - 1] + 1)).setTo(127);
                        else
                            this->mappedArea(Range(x2, x1), Range(linex[yv - 1], linex[yv - 1] + 1)).setTo(127);
                    }
                    //**************
                    if (distanceInPixel < (this->rangerMaxRange)) {
                        int x1 = ((this->mapSize - 1) - obstacleY);
                        this->mappedArea(Range(x1, x1 + 1), Range(obstacleX, obstacleX + 1)).setTo(0);
                    }

                }
                else {
                    for (float yx = this->locationY;
                         abs(yx - this->locationY) <= abs(y - this->locationY); yx = yx + yAxis) {
                        if (yx != y) {
                            yx = yx + (0.5 * yAxis);
                            linex.push_back(round((yx - b) / slope));
                            if ((currentCountOfPixel = currentCountOfPixel +
                                                       abs(linex[linex.size() - 1] - linex[linex.size() - 2])) >=
                                rangerDistanceInPixelCount) {
                                linex[linex.size() - 1] = this->locationX + (rangerDistanceInPixelCount * xAxis);
                                liney.push_back(yx - (0.5 * yAxis) + yAxis);
                                obstacleX = this->locationX + (rangerDistanceInPixelCount * xAxis);
                                if(currentCountOfPixel>rangerDistanceInPixelCount){
                                    obstacleY = yx - (0.5 * yAxis);
                                }
                                else {
                                    obstacleY = yx - (0.5 * yAxis) + yAxis;
                                }
                                break;
                            }
                            yx = yx - (0.5 * yAxis);
                            liney.push_back(yx + yAxis);
                        }
                        else {
                            linex.push_back(x);
                            if ((currentCountOfPixel = currentCountOfPixel +
                                                       abs(linex[linex.size() - 1] - linex[linex.size() - 2])) >=
                                rangerDistanceInPixelCount) {
                                linex[linex.size() - 1] = this->locationX + (rangerDistanceInPixelCount * xAxis);
                                liney.push_back(y);
                                //**************
                                obstacleX = this->locationX + (rangerDistanceInPixelCount * xAxis);
                                if(currentCountOfPixel>rangerDistanceInPixelCount){
                                    obstacleY = y;
                                }
                                else {
                                    obstacleY = y + yAxis;
                                }
                                break;
                            }
                            liney.push_back(y);
                        }
                    }
                    //for(int xv=0;xv<linex.size();xv++)
                    //std::cout<< ">>>>>>>>>>>>>" << linex[xv] <<"," << liney[xv] <<std::endl;

                    for (int xv = 1; xv < linex.size(); xv++) {
                        //------------- x co-ordinates for Mat objects
                        int x1 = ((this->mapSize - 1) - liney[xv]);
                        //int x2=((this->mapSize-1)-liney[xv]);

                        if (linex[xv - 1] < linex[xv])
                            this->mappedArea(Range(x1, x1 + 1), Range(linex[xv - 1], linex[xv] + 1)).setTo(127);
                        else
                            this->mappedArea(Range(x1, x1 + 1), Range(linex[xv], linex[xv - 1] + 1)).setTo(127);
                    }
                    //**************
                    if (distanceInPixel < (this->rangerMaxRange)) {
                        int x1 = ((this->mapSize - 1) - obstacleY);
                        this->mappedArea(Range(x1, x1 + 1), Range(obstacleX, obstacleX + 1)).setTo(0);
                    }

                }
            }

            linex.clear();
            liney.clear();

            //------------------------------
            int temp = (x - this->locationX) + this->locationY;
            x = ((y - this->locationY) * (-1)) + this->locationX;
            y = temp;
        }

        //if(((int)copyOfSampleRefAngle%45)!=0.0){
        if (copyOfSampleRefAngle != 0.0 || copyOfSampleRefAngle != 45.0) {
            float tempx = (((x - this->locationX) * cos((2 * copyOfSampleRefAngle) * PI / 180.0)) +
                           ((y - this->locationY) * sin((2 * copyOfSampleRefAngle) * PI / 180.0))) + this->locationX;
            float tempy = ((-(x - this->locationX) * sin((2 * copyOfSampleRefAngle) * PI / 180.0)) +
                           ((y - this->locationY) * cos((2 * copyOfSampleRefAngle) * PI / 180.0))) + this->locationY;
            x = round(tempx);
            y = round(tempy);
            copyOfSampleRefAngle = 360 - copyOfSampleRefAngle;
            for (int i = 0; i < 360; i = i + 90) {
                float theta =
                        (copyOfSampleRefAngle + i) > 360 ? (copyOfSampleRefAngle + i) - 360 : (copyOfSampleRefAngle +
                                                                                               i);
                samplePoint = round((float) theta / this->degreePerSample);
                //samplePoint=(samplePoint>(360/this->degreePerSample))?(samplePoint-(360/this->degreePerSample)):samplePoint;
                distanceInPixel = ((range[samplePoint]) - (1.0 / (2 * this->resolutionOfMapPerPoint))) *
                                  this->resolutionOfMapPerPoint;
                //std::cout<< "Current pixel value is :("<<x<<","<<y<<")"<<std::endl;
                obstacle = false;

                //-------------- assign values to map vector
                float slope = (float) (y - this->locationY) / (x - this->locationX);
                float b = (float) ((x * this->locationY) - (this->locationX * y)) / (x - this->locationX);
                int rangerDistanceInPixelCount = round(((double) (distanceInPixel / sizeOfEachPixel)));
/*
                  std::cout<< "Current pixels slope ="<<slope<<" and b="<<b<<std::endl;
                  std::cout<< "Sample point for current pixel :"<<samplePoint<<std::endl;
                  std::cout<< "Ranger reading(pixels) for Current pixel is :"<<distanceInPixel<<std::endl;
                  std::cout<< "Size of each pixel for current distance :"<<sizeOfEachPixel <<std::endl;
                  std::cout<< "Current pixels angle from start position (+ve x-axis) :"<<(angleFromStartSample-(2*sampleRefAngle)+i)<<std::endl;
                  std::cout<< "Current pixels angle from start position of ranger :"<<theta<<std::endl;
                  std::cout<< "Current pixels range count(pixels) :"<< rangerDistanceInPixelCount <<std::endl;
*/
                std::vector<int> linex;
                std::vector<int> liney;
                liney.push_back(this->locationY);
                linex.push_back(this->locationX);
                int currentCountOfPixel = 0;

                float angleFromRefAxis = ((angleFromStartSample - (2 * sampleRefAngle)) + i) > 360 ?
                                         ((angleFromStartSample - (2 * sampleRefAngle)) + i) - 360 : (
                                                 ((angleFromStartSample - (2 * sampleRefAngle)) + i) < 0 ?
                                                 ((angleFromStartSample - (2 * sampleRefAngle)) + i) + 360 : (
                                                         (angleFromStartSample - (2 * sampleRefAngle)) + i));

                if (this->locationX == x || this->locationY == y) {

                }
                else {
                    //****************************
                    int xAxis = (angleFromRefAxis >= 90 && angleFromRefAxis < 270) ? -1 : 1;
                    int yAxis = (angleFromRefAxis >= 180 && angleFromRefAxis < 360) ? -1 : 1;
                    if ((angleFromRefAxis >= 45.0 && angleFromRefAxis < 135.0) ||
                        (angleFromRefAxis >= 225.0 && angleFromRefAxis < 315.0)) {
                        for (float yx = this->locationX;
                             abs(yx - this->locationX) <= abs(x - this->locationX); yx = yx + xAxis) {
                            if (yx != x) {
                                yx = yx + (0.5 * xAxis);
                                liney.push_back(round(((slope * yx) + b)));
                                if ((currentCountOfPixel = currentCountOfPixel +
                                                           abs(liney[liney.size() - 1] - liney[liney.size() - 2])) >=
                                    rangerDistanceInPixelCount) {
                                    liney[liney.size() - 1] = this->locationY + (rangerDistanceInPixelCount * yAxis);
                                    linex.push_back(yx - (0.5 * xAxis) + xAxis);
                                    obstacleY = this->locationY + (rangerDistanceInPixelCount * yAxis);
                                    if(currentCountOfPixel>rangerDistanceInPixelCount){
                                        obstacleX = yx - (0.5 * xAxis);
                                    }
                                    else {
                                        obstacleX = yx - (0.5 * xAxis) + xAxis;
                                    }
                                    break;
                                }
                                yx = yx - (0.5 * xAxis);
                                linex.push_back(yx + xAxis);
                            }
                            else {
                                liney.push_back(y);
                                if ((currentCountOfPixel = currentCountOfPixel +
                                                           abs(liney[liney.size() - 1] - liney[liney.size() - 2])) >=
                                    rangerDistanceInPixelCount) {
                                    liney[liney.size() - 1] = this->locationY + (rangerDistanceInPixelCount * yAxis);
                                    linex.push_back(x);
                                    //**************
                                    obstacleY = this->locationY + (rangerDistanceInPixelCount * yAxis);
                                    if(currentCountOfPixel>rangerDistanceInPixelCount){
                                        obstacleX = x;
                                    }
                                    else {
                                        obstacleX = x + xAxis;
                                    }
                                    
                                    break;
                                }
                                linex.push_back(x);
                            }
                        }
                        //for(int yv=0;yv<liney.size();yv++)
                        //std::cout<< ">>>>>>>>>>>>>" << linex[yv] <<"," << liney[yv] <<std::endl;

                        for (int yv = 1; yv < liney.size(); yv++) {
                            //------------- x co-ordinates for Mat objects
                            int x1 = ((this->mapSize - 1) - liney[yv - 1]);
                            int x2 = ((this->mapSize - 1) - liney[yv]);

                            if (x1 < x2)
                                this->mappedArea(Range(x1, x2), Range(linex[yv - 1], linex[yv - 1] + 1)).setTo(127);
                            else
                                this->mappedArea(Range(x2, x1), Range(linex[yv - 1], linex[yv - 1] + 1)).setTo(127);
                        }
                        //**************
                        if (distanceInPixel < (this->rangerMaxRange)) {
                            int x1 = ((this->mapSize - 1) - obstacleY);
                            this->mappedArea(Range(x1, x1 + 1), Range(obstacleX, obstacleX + 1)).setTo(0);
                        }

                    }
                    else {
                        for (float yx = this->locationY;
                             abs(yx - this->locationY) <= abs(y - this->locationY); yx = yx + yAxis) {
                            if (yx != y) {
                                yx = yx + (0.5 * yAxis);
                                linex.push_back(round((yx - b) / slope));
                                if ((currentCountOfPixel = currentCountOfPixel +
                                                           abs(linex[linex.size() - 1] - linex[linex.size() - 2])) >=
                                    rangerDistanceInPixelCount) {
                                    linex[linex.size() - 1] = this->locationX + (rangerDistanceInPixelCount * xAxis);
                                    liney.push_back(yx - (0.5 * yAxis) + yAxis);
                                    obstacleX = this->locationX + (rangerDistanceInPixelCount * xAxis);
                                    if(currentCountOfPixel>rangerDistanceInPixelCount){
                                        obstacleY = yx - (0.5 * yAxis);
                                    }
                                    else {
                                        obstacleY = yx - (0.5 * yAxis) + yAxis;
                                    }
                                    break;
                                }
                                yx = yx - (0.5 * yAxis);
                                liney.push_back(yx + yAxis);
                            }
                            else {
                                linex.push_back(x);
                                if ((currentCountOfPixel = currentCountOfPixel +
                                                           abs(linex[linex.size() - 1] - linex[linex.size() - 2])) >=
                                    rangerDistanceInPixelCount) {
                                    linex[linex.size() - 1] = this->locationX + (rangerDistanceInPixelCount * xAxis);
                                    liney.push_back(y);
                                    //**************
                                    obstacleX = this->locationX + (rangerDistanceInPixelCount * xAxis);
                                    if(currentCountOfPixel>rangerDistanceInPixelCount){
                                        obstacleY = y;
                                    }
                                    else {
                                        obstacleY = y + yAxis;
                                    }                                   
                                    break;
                                }
                                liney.push_back(y);
                            }
                        }
                        //for(int xv=0;xv<linex.size();xv++)
                        //std::cout<< ">>>>>>>>>>>>>" << linex[xv] <<"," << liney[xv] <<std::endl;

                        for (int xv = 1; xv < linex.size(); xv++) {
                            //------------- x co-ordinates for Mat objects
                            int x1 = ((this->mapSize - 1) - liney[xv]);
                            //int x2=((this->mapSize-1)-liney[xv]);

                            if (linex[xv - 1] < linex[xv])
                                this->mappedArea(Range(x1, x1 + 1), Range(linex[xv - 1], linex[xv] + 1)).setTo(127);
                            else
                                this->mappedArea(Range(x1, x1 + 1), Range(linex[xv], linex[xv - 1] + 1)).setTo(127);
                        }
                        //**************
                        if (distanceInPixel < (this->rangerMaxRange)) {
                            int x1 = ((this->mapSize - 1) - obstacleY);
                            this->mappedArea(Range(x1, x1 + 1), Range(obstacleX, obstacleX + 1)).setTo(0);
                        }

                    }
                }

                linex.clear();
                liney.clear();

                int temp = (x - this->locationX) + this->locationY;
                x = ((y - this->locationY) * (-1)) + this->locationX;
                y = temp;
            }
            copyOfSampleRefAngle = 360 - copyOfSampleRefAngle;
            x = round(((x - this->locationX) * cos((2 * copyOfSampleRefAngle) * PI / 180.0)) -
                      ((y - this->locationY) * sin((2 * copyOfSampleRefAngle) * PI / 180.0))) + this->locationX;
            y = round(((x - this->locationX) * sin((2 * copyOfSampleRefAngle) * PI / 180.0)) +
                      ((y - this->locationY) * cos((2 * copyOfSampleRefAngle) * PI / 180.0))) + this->locationY;
        }

        //---------------- find next point
        if (xinc) {
            //------------- inc or dec 'x' and find 'y' & sampleAngle
            int nextX = (angleFromStartSample >= 45.0 && angleFromStartSample < 135.0) ? -1 : 1;
            x = x + nextX;

            float tempy = (angleFromStartSample >= 180.0 && angleFromStartSample < 360.0) ? ((2 * this->locationY) -
                                                                                             (this->locationY +
                                                                                              sqrt(pow(this->maxRange,
                                                                                                       2) -
                                                                                                   pow((this->locationX -
                                                                                                        x), 2)))) :
                          this->locationY + sqrt(pow(this->maxRange, 2) - pow((x - this->locationX), 2));
            y = round(tempy);
            //float angleFromLastPt=acos((((yInitial-this->locationY)*(tempy-this->locationY))+((xInitial-this->locationX)*(x-this->locationX)))/(pow((xInitial-this->locationX),2)+pow((yInitial-this->locationY),2)))*180/PI;

            sampleRefAngle = sampleRefAngle +
                             abs((abs(atan((float) (yInitial - this->locationY) / (xInitial - this->locationX))) * 180 /
                                  PI) - (abs(atan((float) (y - this->locationY) / (x - this->locationX))) * 180 / PI));
            //std::cout<< "sampleRefAngle after xinc :" << sampleRefAngle <<std::endl;
            angleFromStartSample =
                    (180 + this->orientation + sampleRefAngle) > 360 ? (180 + this->orientation + sampleRefAngle) - 360
                                                                     : (180 + this->orientation + sampleRefAngle);
        }
        else {
            //------------- inc or dec 'y' and find 'x' & sampleAngle
            //**********************
            int nextY = (angleFromStartSample >= 135.0 && angleFromStartSample < 225.0) ? -1 : 1;
            //----------------------
            y = y + nextY;

            float tempx = (angleFromStartSample >= 90.0 && angleFromStartSample < 270.0) ? ((2 * this->locationX) -
                                                                                            (this->locationX +
                                                                                             sqrt(pow(this->maxRange,
                                                                                                      2) -
                                                                                                  pow((this->locationY -
                                                                                                       y), 2)))) :
                          this->locationX + sqrt(pow(this->maxRange, 2) - pow((y - this->locationY), 2));
            x = round(tempx);

            //float angleFromLastPt=acos((((yInitial-this->locationY)*(y-this->locationY))+((xInitial-this->locationX)*(tempx-this->locationX)))/(pow((xInitial-this->locationX),2)+pow((yInitial-this->locationY),2)))*180/PI;

            sampleRefAngle = sampleRefAngle +
                             abs((abs(atan((float) (yInitial - this->locationY) / (xInitial - this->locationX))) * 180 /
                                  PI) - (abs(atan((float) (y - this->locationY) / (x - this->locationX))) * 180 / PI));
            //std::cout<< "sampleRefAngle after yinc :" << sampleRefAngle <<std::endl;
            angleFromStartSample =
                    (180 + this->orientation + sampleRefAngle) > 360 ? (180 + this->orientation + sampleRefAngle) - 360
                                                                     : (180 + this->orientation + sampleRefAngle);
        }
    }

    imshow("normal", this->mappedArea);

    waitKey(50);
}
