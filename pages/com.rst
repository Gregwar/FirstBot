.. slide:: middleSlide

Communication Dynamixel
=======================

.. slide::

Installation de *PyPot*
-----------------------

Afin de communiquer avec les moteurs, nous vous proposons d'installer
la bibliothèque python *PyPot*.

Pour cela, il faudra lancer à bord de la Raspberry Pi:

.. code-block::

    sudo apt-get install python-pip python-numpy python-scipy python-matplotlib
    pip install pypot

.. slide::

Utilisation
-----------

Voici un exemple simple de script qui permet de bouger le moteur ``ID=1``:

.. code-block:: python

    import pypot.dynamixel

    ports = pypot.dynamixel.get_available_ports()
    if not ports:
        exit('No port')

    dxl_io = pypot.dynamixel.DxlIO(ports[0])
    dxl_io.set_wheel_mode([1])
    dxl_io.set_moving_speed({1: 360}) # Degrees / s
