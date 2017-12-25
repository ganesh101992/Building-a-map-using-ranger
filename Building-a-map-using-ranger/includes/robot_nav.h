#ifndef STAGE_CONTROLLERS_ROBOT_NAV_H
#define STAGE_CONTROLLERS_ROBOT_NAV_H

#include "sensor_msgs/LaserScan.h"

namespace stage_controllers
{
class Robot_Nav
{
public:
   bool move(const sensor_msgs::LaserScan range);
};
};
#endif //STAGE_CONTROLLERS_ROBOT_NAV_H
