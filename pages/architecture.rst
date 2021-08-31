
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

We will also provide you a set of screws that you can use for the assembly.

.. important::
    You are responsible to draw the frame!

.. slide::

Electronics
------------

Powering
~~~~~~~~~~~~

Robot is powered using a 3S (about *12V*) battery. This voltage is then
stepped down to provide *5V* required for Raspberry Pi.

Motors are, however, directly powered by the battery.

.. slide::

Servomotor
~~~~~~~~~~~~

**MX-12W** are servomotors that integrated different parts:

.. discoverList::
    
    * A **DC motor**
    * A convenient **plastic box** with numerous screw possibilities
    * A **gearbox** (gears based reducer)
    * An **encoder** (here, magnetic)
    * A power electronics, including:
        * A **H bridge**
        * An **half-duplex** uart communication bus

.. slide::

Gearbox
~~~~~~~

Typical DC motor can provide high rotating speed with low torque.

.. discover::

    .. center::
        .. image:: /img/gearbox.jpg
            :width: 250

    Gearbox ratio allows reducing the rotating speed and obtaining more torque.


.. slide::

H bridge
~~~~~~~~~

.. center::
    .. image:: /img/ponth.png
        :width: 300

.. textOnly::
    We mentionned **H bridge** before without exactly explaining what it is.

    Actually, H bridge is a transistor networks allowing:

.. slideOnly::
    It allows:

.. discoverList::
    * **Providing power** to the motors (getting amps passing, here 2.5A max)
    * Switching the **polarity**, which changes rotation direction

.. textOnly::
    Indeed, microcontrollers inputs/outputs only allow for a few mA to go through
    them. It is then not possible to plug a motor on them. H bridge can be used to
    provide this power and invert direction.

.. slide::

Communication bus
~~~~~~~~~~~~~~~~~~~~

Dynamixel servomotors like MX-12W are plugged using 3 pins connector: ground, power
and serial data.

.. discover::
    .. center::
        .. image:: /img/daisy_chain.jpg

.. discover::
    Those 3 wires are **common** to every motor plugged.

.. discover::
    Motors are identified by software **ID**, a number that identifies them on the bus.

.. slide::

Connection with *USB2AX*
~~~~~~~~~~~~~~~~~~~~~~~

Once you plugged *USB2AX* board to your computer, it will appear as an UART device.
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
