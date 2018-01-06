# Building-a-map-using-ranger

Running a simulation in stage to build a map of the surounding from a known initial location. It demonstrates that the surroundings
can be mapped with less error if resolution of the map image is higher.
My implementation requires distance between the center of the robot and obstacles, from all direction (360 degrees). It can be used to work with any sensors that measures distances between an obstacle and the center of the robot.

Map_Image.jpg is an example of the mapped region, original image used is at location 'world/bitmaps/roomba-stage.png'(rotated by 90 degrees).

TODO: Use the map to find the shortest distance between the current position of the robot and the new location, and avoid obastacles
      while navigating.
      Add termaination conditions, which stops the execution once a desired amount of area is mapped.
      
BUGS: Abrupt termination of stage node when the robot is moving.
