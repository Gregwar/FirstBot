.. slide:: middleSlide

Tools
======

.. slide::

Hardware
--------

Robot's frame
~~~~~~~

.. image:: /img/mx-12w.jpg
    :class: right

.. textOnly::
    In this project, you will use MX-12W motors

.. slideOnly::
    **Servomotors MX-12W**

.. discoverList::
    * **2 motors** with reducers and encoders
    * Mechanical **fixation brackets**
    * A **LiPo 3S**
    * **It's up to you to make the frame** !

.. slide::

Communication board
~~~~~~~~~~~~~~~~~

.. image:: /img/usb2ax.jpg
    :class: right
    :width: 250

.. textOnly::
    You will use an USB/UART adapter **USB2AX** to communicate with servomotors

.. slideOnly::
    **USB2AX Module**

.. discoverList::
    * Adapting **USB to UART**
    * Handling **half-duplex** communication
    * **3 points Molex connector**

.. slide::

.. _se:

CPU
~~~

.. image:: /img/raspberry.jpg
    :class: right
    :width: 250

.. textOnly::
    Onboard, we will use a **Raspberry Pi**, which is basically a small computer
    *low-cost but powerful*. It includes:

.. slideOnly::
    **Raspberry Pi**

.. discoverList::
    * **ARM** processor with four cores at **1.2 Ghz**
    * **1GB** of **RAM**
    * An operating system, namely **Debian** installed on an SD card
    * **USB** and **Ethernet** ports
    * *Note: Pros don't need a screen and a keyboard :-)*

.. textOnly::
    This is where you will program the decisions made by the robot. Its computing power is an asset to
    analyze an image (although more limited than your laptop).

.. slide::

Camera
~~~~~~

.. image:: /img/logitech.jpg
    :class: right

.. textOnly::
    Finally, we will install a camera:

.. slideOnly::
    **Logitech c270**

.. discoverList::
    * Can capture up to **HD 720p**
    * **Linux** and **OpenCV** compliant
    * Can **lower the resolution** to increase **frequency**
    
.. textOnly::
    This camera will be plugged to the **Raspberry Pi** to extract images and drive the robot

   
.. slide::

Software
--------

.. image:: /img/pypot.png
    :class: right
    :width: 250


PyPot
~~~~~

.. discoverList::
    * **Python** library
    * Can communicate with **Dynamixel** based servomotors
    * **registers read/write** oriented protocol
    * Servomotors identified by software **IDs**

.. slide::

Debian (Raspbian)
~~~~~~

.. image:: /img/debian.png
    :class: right
    :width: 250

.. textOnly::
    **Debian** is a widespread operating system, it will be the one we will use
    on our Raspberry Pi.

.. slideOnly::
    **Debian**

.. discoverList::
    * It is a **Linux distribution**
    * There is a special version optimized for **Raspberry Pi**
    * It is very famous and used (Ubuntu is based on it)

.. textOnly::

    You can connect to the **Raspberry Pi** using for example **SSH**
    to access both camera and motors communication, taking advantage of the
    operating system and computational power of the board.

.. slide::

OpenCV: image processing
~~~~~~

.. image:: /img/opencv.png
    :class: right

.. textOnly::
    **OpenCV** is an image processing library, which:

.. slideOnly::
    **OpenCV**

.. discoverList::
    * Is **Open-source**
    * Allows for easy **image capturing and accessing**
    * Is well `documented <http://opencv.org/documentation.html>`_ and easy to use
    * Contains many **out of the box image analysis algorithms**

.. slide::

Battery: LiPo 3S
~~~~~~~~~~~~~~~~~

You will use LiPo 3S batteries.

.. warning::
    Warning: always use the buzzer monitor before every use and turn everything
    off **immediately** when it starts buzzing.
.. warning::
    Warning: do NOT let the battery connected when the robot is left alone for long periods of time, typically during the lunch break.

.. slide::

.. center::
    .. youtube:: XbZNZ1-ovzc

.. slide::

Frame design
~~~~~~

.. image:: /img/laser.jpg
    :class: right
    :width: 350

To draw your own robot frame, you will cut it with laser using wood or acrylic.

We strongly recommand the following CAD software:

.. important::

    `OnShape <https://www.onshape.com>`_

Other softwares are available:

.. important::

     * `Autodesk Inventor Professional <http://students.autodesk.com/?nd=download_center>`_
     * `OpenScad <http://www.openscad.org/>`_
     * `InkScape <https://inkscape.org/fr/>`_
     * `LibreCAD <https://librecad.org/>`_ 

.. slide::

Budget
~~~~~~

.. |euro| raw:: 

    &euro;

.. |mx-12w| div::

    `MX-12W <https://www.generationrobots.com/en/401691-dynamixel-mx-12w-servo-motor.html>`_

.. |raspberry3| div::

    `Raspberry Pi 3 <https://www.generationrobots.com/en/402366-raspberry-pi-3-model-b.html>`_

.. |usb2ax| div::

    `USB2AX <https://www.generationrobots.com/en/401584-usb2ax-for-dynamixel-servos.html>`_

.. |c270| div::

    `Webcam c270 <https://www.amazon.fr/Logitech-microphone-Compatible-Facebook-Centrale/dp/B003PAOAWG>`_

.. |lipo| div::

    `LiPo 4S 4000mAh <https://hobbyking.com/fr_fr/turnigy-high-capacity-4000mah-3s2p-12c-multi-rotor-lipo-pack-w-xt60.html>`_

.. |ubec| div::

    `Converter DC/DC 5V 3A <https://www.generationrobots.com/en/402297-ubec-dcdc-buck-type-step-down-converter-5v-3a-output.html>`_

.. |fp04f3| div::

    `Brackets FP04-F3 <https://www.generationrobots.com/fr/401922-lot-de-10-pi%C3%A8ces-de-structure-fp04-f3-pour-servomoteur-dynamixel-ax.html?utm_source=Doofinder&utm_medium=Doofinder&utm_campaign=Doofinder>`_

Robot price estimation:

==================     ==========      ==========
**Part**               **Quantity**    **Price**
==================     ==========      ==========
|mx-12w|               2               65~|euro|
==================     ==========      ==========
|fp04f3|               2               -
==================     ==========      ==========
|raspberry3|           1               40~|euro|
==================     ==========      ==========
|usb2ax|               1               30~|euro|
==================     ==========      ==========
|c270|                 1               30~|euro|
==================     ==========      ==========
|lipo|                 1               20~|euro|
==================     ==========      ==========
|ubec|                 1               10~|euro|
==================     ==========      ==========
                       **Total**       **260~|euro|**
==================     ==========      ==========

