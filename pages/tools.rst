.. slide:: middleSlide

Outils
======

.. slide::

Matériel
--------

Le corps du robot: le châssis
~~~~~~~

.. image:: /img/mx-12w.jpg
    :class: right

.. textOnly::
    Dans ce projet, vous utiliserez des moteurs MX-12W

.. slideOnly::
    **Servomoteurs MX-12W**

.. discoverList::
    * **2 moteurs** avec réducteurs et encodeurs
    * Des **pièces de fixation** mécanique
    * Une **LiPo 3S**
    * **A vous de faire le châssis** !

.. slide::

Carte de communication
~~~~~~~~~~~~~~~~~

.. image:: /img/usb2ax.jpg
    :class: right
    :width: 250

.. textOnly::
    Vous utiliserez un adaptateur USB/Série **USB2AX** afin de communiquer avec les
    servomoteurs.

.. slideOnly::
    **Module USB2AX**

.. discoverList::
    * Adaptateur **USB vers série**
    * Gestion du bus **half-duplex**
    * **Connecteurs 3 points**

.. textOnly::
    Cette carte fait donc parfaitement l'affaire pour piloter le châssis ci-dessus.
    Chaque pont en H permettra de piloter une roue.

.. slide::

.. _se:

Le système embarqué
~~~~~~~~~~~~~~~~

.. image:: /img/raspberry.jpg
    :class: right
    :width: 250

.. textOnly::
    A bord, nous mettrons également en place une **Raspberry Pi**, un véritable
    petit ordinateur *low-cost mais puissant*. Dessus, nous aurons:

.. slideOnly::
    **Raspberry Pi 3**

.. discoverList::
    * Un processeur **ARM**, avec quatre cœurs à **1.2 Ghz**
    * **1GB** de mémoire vive
    * Un système d'exploitation, en l’occurrence **Debian**, installé sur une carte SD
    * Des **ports USB** et un **port Ethernet**

.. textOnly::
    Cette carte vous permettra de programmer l'intelligence artificielle du robot, la puissance de calcul sera
    un réel atout pour effectuer l'analyse d'image.

.. slide::

Les capteurs: la caméra
~~~~~~

.. image:: /img/logitech.jpg
    :class: right

.. textOnly::
    Enfin, nous installerons une caméra afin de faire de l'analyse d'image:

.. slideOnly::
    **Logitech c270**

.. discoverList::
    * Peut filmer en **HD 720p**
    * **Compatible Linux** et OpenCV
    * Peut **descendre en résolution** pour augmenter en fréquence

.. textOnly::
    Cette caméra sera branchée à la **Raspberry Pi** qui en extraiera des images pour
    piloter le tout

   
.. slide::

Logiciel
--------

.. image:: /img/pypot.png
    :class: right
    :width: 250


Contrôle des actionneurs: PyPot
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. discoverList::
    * Bibliothèque **Python**
    * Permet de communiquer avec les servomoteurs sur le bus **Dynamixel**
    * Protocole orienté **lecture et écriture de registres**
    * Servomoteurs identifiés par des **IDs**

.. slide::

Système d'exploitation: Debian
~~~~~~

.. image:: /img/debian.png
    :class: right
    :width: 250

.. textOnly::
    **Debian** est un système d'exploitation très répandu. Ce sera le système
    que nous utiliserons à bord de la Raspberry Pi. 

.. slideOnly::
    **Debian**

.. discoverList::
    * Il est une **distribution de Linux**
    * Il possède une version spécialement optimisée pour **Raspberry pi**
    * Il est très connu et utilisé (Ubuntu est basé dessus)

.. textOnly::

    Vous pourrez alors vous connecter à la **Raspberry pi** par **SSH** par
    exemple et accéderez alors à la caméra et à la carte de contrôle des moteurs
    avec la puissance d'un système d'exploitation et d'un "gros" processeur.

.. slide::

Traitement de l'information des capteurs : OpenCV
~~~~~~

.. image:: /img/opencv.png
    :class: right

.. textOnly::
    **OpenCV** est une bibliothèque de traitement d'images, qui:

.. slideOnly::
    **OpenCV**

.. discoverList::
    * Est **Open-source**
    * Permet **d'accéder aux images d'une caméra** facilement
    * Est assez ` documenté <http://opencv.org/documentation.html>`_ et facile d'emploi
    * Contient de nombreuses **fonctions d'analyse d'image** clé en main

.. textOnly::
    Elle vous permettra d'extraire les images de la caméra et de les analyser pour
    piloter votre robot

.. slide::

Batteries: LiPo 3S
~~~~~~~~~~~~~~~~~

Vous utiliserez des batteries LiPo 3S.

.. warning::
    Attention: pensez à bien brancher le buzzer à la batterie avant toute
    utilisation et à tout éteindre **immédiatement** lorsqu'il commence à
    beeper.

.. slide::

.. center::
    .. youtube:: XbZNZ1-ovzc

.. slide::

Design du hardware
~~~~~~

.. image:: /img/laser.jpg
    :class: right
    :width: 350

Afin de dessiner le châssis du robot, nous vous proposons de découper au laser du
bois ou du plexiglas.

Nous vous recommandons fortement d'utiliser le logiciel de CAD suivant:

.. important::

    `OnShape <https://www.onshape.com>`_

D'autres logiciels sont disponibles en téléchargement:

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

    `Convertisseur DC/DC 5V 3A <https://www.generationrobots.com/en/402297-ubec-dcdc-buck-type-step-down-converter-5v-3a-output.html>`_

.. |fp04f3| div::

    `Pièces de structure FP04-F3 <https://www.generationrobots.com/fr/401922-lot-de-10-pi%C3%A8ces-de-structure-fp04-f3-pour-servomoteur-dynamixel-ax.html?utm_source=Doofinder&utm_medium=Doofinder&utm_campaign=Doofinder`_

Le coût de chaque robot peut être estimé:

==================     ==========      ==========
**Pièce**              **Quantité**    **Prix**
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

