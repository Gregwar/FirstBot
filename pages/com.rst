.. slide:: middleSlide

Dynamixel communication
=======================

.. slide::

*PyPot* installation
---------------------

To communicate with servomotors, we will use *PyPot* library. To install it, simply run:

.. code-block::

    sudo apt-get install python-pip python-numpy python-scipy python-matplotlib
    pip install pypot

.. slide::

Usage
-----

Here is a script example allowing to move the ``ID=1`` motor:

.. code-block:: python

    import pypot.dynamixel

    ports = pypot.dynamixel.get_available_ports()
    if not ports:
        exit('No port')

    dxl_io = pypot.dynamixel.DxlIO(ports[0])
    dxl_io.set_wheel_mode([1])
    dxl_io.set_moving_speed({1: 360}) # Degrees / s
