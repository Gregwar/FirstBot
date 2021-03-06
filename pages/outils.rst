.. slide:: middleSlide

Outils
======

.. slide::

Matériel
--------

Le corps du robot: le chassis
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
    * **A vous de faire le chassis** !

.. _montage:

.. textOnly::
    Ce chassis est livré non monté avec une notice claire et un tournevis adapté, il est très
    facile de le monter. On imprimera aussi des pieces pour faire tenir la caméra avec l'imprimante 3D.

.. slide::

Carte de communication
~~~~~~~~~~~~~~~~~

.. image:: /img/usb2ax.jpg
    :class: right

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
    Cette carte fait donc parfaitement l'affaire pour piloter le chassis ci-dessus.
    Chaque pont en H permettra de piloter une roue.

.. slide::

.. _se:

Le système embarqué
~~~~~~~~~~~~~~~~

.. image:: /img/raspberry.jpg
    :class: right

.. textOnly::
    A bord, nous mettrons également en place une **Raspberry Pi**, un véritable
    petit ordinateur *low-cost mais puissant*. Dessus, nous aurons:

.. slideOnly::
    **Raspberry Pi 3**

.. discoverList::
    * Un processeur **ARM**, avec quatre coeurs à **1.2 Ghz**
    * **1GB** de mémoire vive
    * Un système d'exploitation, en l'occurence **Debian**, installé sur une carte SD
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

Contrôle des actionneurs: PyPot
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. image:: /img/pypot.png
    :class: right

Nous utiliserons la bibliothèque python ``pypot`` afin de communiquer
avec les servomoteurs sur le bus Dynamixel.


.. slide::

Système d'exploitation: Debian
~~~~~~

.. image:: /img/debian.png
    :class: right

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

On pourra télécharger un logiciel de CAD pour le design des pieces 3D:

.. important::

     `Autodesk Inventor Professional <http://students.autodesk.com/?nd=download_center>`_
