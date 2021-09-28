
.. slide:: middleSlide

Robot's architecture
=====================

.. slide::

Mechanics
-------

Assembly
~~~~~~~

.. image:: /img/bioloid_brackets.jpg
    :class: right

Servomotors are provided with *brackets*, which are plastic parts allowing
fixation on the side of the motor.

We will also provide a set of screws that you can use for the assembly.

.. important::
    Drawing the frame is your responsability!

.. slide::

Electronics
------------

Power
~~~~~~~~~~~~

The robot is powered using a 3S (about *12V*) battery. This voltage is then
stepped down to provide the *5V* required for Raspberry Pi.

Motors are, however, directly powered by the battery.

.. slide::

Servomotor
~~~~~~~~~~~~

**MX-12W** are servomotors that integrate different parts:

.. discoverList::
    
    * A **DC motor**
    * A convenient **plastic box** with numerous screw possibilities
    * A **gearbox** (gears based reducer)
    * An **encoder** (here magnetic)
    * A power electronics, including:
        * A **H bridge**
        * An **half-duplex** uart communication bus

.. slide::

Gearbox
~~~~~~~

Typical DC motors can provide high rotating speeds with low torque.

.. discover::

    .. center::
        .. image:: /img/gearbox.jpg
            :width: 250

    The gearbox ratio reduces the rotating speed and increases the torque.


.. slide::

H bridge
~~~~~~~~~

.. center::
    .. image:: /img/ponth.png
        :width: 300

.. textOnly::
    We mentionned the **H bridge** before without exactly explaining what it is.

    An H bridge is an electronic circuit that uses transitors for:

.. slideOnly::
    It allows:

.. discoverList::
    * **Providing power** to the motors (getting amps passing, here 2.5A max)
    * Switching the **polarity**, which changes the rotation direction

.. textOnly::
    Indeed, microcontrollers inputs/outputs only allow for a few mA to go through
    them. It is therefore not possible to plug a motor on them. H bridges can be used to
    provide this power and invert direction.

.. slide::

Communication bus
~~~~~~~~~~~~~~~~~~~~

Dynamixel servomotors like MX-12W are plugged using 3 pins connectors: ground, power
and serial data.

.. discover::
    .. center::
        .. image:: /img/daisy_chain.jpg

.. discover::
    The motors are plugged in a serial fashion, therefore those 3 wires are **common** to every motor plugged (meaning the same power/data/groud wire goes through every motor)

.. discover::
    Motors are identified by a software **ID**, a number that identifies them on the bus.

.. slide::

Connection with *USB2AX*
~~~~~~~~~~~~~~~~~~~~~~~

Once you plug the *USB2AX* board to your computer, it will appear as an UART device.
On Linux, you will discover a pseudo-file named typically ``/dev/ttyUSB0``:

.. code-block:: text
    $ ls /dev/ttyUSB*
    /dev/ttyUSB0

On Windows, it will appear as a **COMx** port, where **x** is a number that you can find
having a look in the devices manager.

You can test that the board works by checking devices appearing when you plug it.

.. textOnly::
    Ressources
    ----------

    * `ROBOTIS MX-12W manual <http://emanual.robotis.com/docs/en/dxl/mx/mx-12w/>`_
    * `Dynamixel protcol documentation <http://emanual.robotis.com/docs/en/dxl/protocol1/>`_
