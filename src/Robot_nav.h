#ifndef STAGE_CONTROLLERS_ROBOT_NAV_H
#define STAGE_CONTROLLERS_ROBOT_NAV_H

#include "ros/ros.h"

//#include <ros/callback_queue.h>

//#include <ros/subscription_queue.h>

#include "stage.hh"
#include "geometry_msgs/Twist.h"
#include "sensor_msgs/LaserScan.h"
#include <boost/thread/mutex.hpp>
#include <boost/thread/thread.hpp>
#include <opencv2/highgui.hpp>
#include <opencv2/imgproc.hpp>
#include <sstream>
#include <stdlib.h>
#include "sensor_msgs/LaserScan.h"

#include "stage_controllers/CallStageRos.h"

using namespace cv;

namespace stage_controllers {

    class Robot_nav {
    private:
        ros::ServiceClient move_publisher;
        ros::Subscriber laser_subscriber_forScanning;
        ros::Subscriber laser_subscriber_forMoving;
        ros::NodeHandle *n;

        float distanceToObstacles;
        std::string robotName;

        float prev_distance;

        int rateCond;
        Mat mappedArea;
        int mapSize;
        int resolutionOfMapPerPoint;
        int locationX,locationY,orientation,robot_size,mask_size;
        float perPixelMidPoint,degreePerSample,maxRange,rangerMaxRange;

        //static int sensorFailure;

    public:
        void run(ros::NodeHandle *nh,std::string s1);
        void move(int x_dest,int y_dest);
        void move_aMeter(std::vector<float> range);
        void mapArea(const boost::shared_ptr<sensor_msgs::LaserScan const>& range);
        void createMap(std::vector<float> range);
        void findOpenSpace();
    };
}

#endif
