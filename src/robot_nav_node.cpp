#include "Robot_nav.h"

using namespace stage_controllers;

int main(int argc, char **argv) 
{
   ros::init(argc, argv, "robot_nav", ros::init_options::AnonymousName);
   ros::NodeHandle n;

   std::string s=argv[argc-1];
   //n.getParam("robot_nav/robot",s);

   Robot_nav rn;
   rn.run(&n,s);
   return 0;
}
