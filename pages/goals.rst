.. slide:: middleSlide

Goals
=========

.. slide::

Challenges
----------

1) Line following
~~~~~~~~~~~~~~~~~

.. image:: img/2019.jpg
    :style: float:right

* Robot should be able to **follow a colored line**
* When it reaches the end of the track, it will follow the next one:
    * **2021-2022 Colors to be defined**

.. slide::

2) Go To
~~~~~~~~~

Robot will be put on a known initial position (for example a cross marked on the ground),
we will then provide a goal position and orientation $$x, y, \theta$$ (using international
system units which are meters and radians).

The robot should move to reach this position/orientation.

.. slide::

3) Odometry
~~~~~~~~~~~~

Robot will be moved (using "passive wheels" mode) on the round.

After some time, you will indicate us where the robot is located regarding the initial
position ($$x, y, \theta$), using only the reading of the motors encoders.

.. slide::

4) Drawing the map
~~~~~~~~~~~~~~~~~~~~~

After following the line of challenge 1, the robot will produce a skyview map
(image) of the track.

.. slide::

Guide
-----

.. |rarr| raw::

    &rarr;

Here are methods we recommand implementing for odometry part:

* $$direct\_kinematics(v_{gauche}, v_{droit})$$ |rarr| $$(\dot x, \dot \theta)$$
  * Takes as parameters wheel speeds (*rad/s*) and returns linear (*m/s*)
  and angular (*rad/s*) speeds of the robot

* $$odom(\dot x, \dot \theta, dt)$$ |rarr| $$(dx, dy, d\theta)$$
  * Takes as parameters linear and angular speed of the robot, and returns the position
  (*m*) and orientation (*rad*) variation in the **robot frame**

* $$tick\_odom(x_{n-1}, y_{n-1}, \theta_{n-1})$$ |rarr| $$(x_n, y_n, \theta_n)$$
  * Takes as parameters the position and orientation of the robot in the world frame,
  variation of the robot position and orientation in the robot frame, and returns new position and
  orientation of the robot in the **world frame**

For control:

* $$inverse\_kinematics(\dot x, \dot \theta)$$ |rarr| $$(v_{gauche}, v_{droit})$$
  * Takes as parameters linear and angular target speeds, and compute speed for left and right wheels
* $$go\_to\_xya(x, y, \theta)$$
  * Takes the robot to a given position in the **world frame**
* $$pixel\_to\_robot(x, y)$$ |rarr| $$x, y, z$$
  * Takes as parameter the position of a pixel in the image and computes the position of the pixel
  in the **robot frame**
* $$pixel\_to\_world(x, y)$$ |rarr| $$x, y, z$$
  * Same, but in the **world frame**

