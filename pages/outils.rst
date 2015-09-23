.. slide:: middleSlide

Outils
============



.. slide::

Matériel
--------

Le corps du robot: le chassis
~~~~~~~

.. image:: /img/dagu.jpg
    :class: right

.. textOnly::
    Vous utiliserez dans ce projet un chassis "clé en main", il s'agit d'une plateforme
    robotique à roue prête à assembler et à fonctionner. Il s'agit du *Dagu Magician 4WD*,
    ce chassis est livré avec:

.. slideOnly::
    **Dagu Magician 4WD**

.. discoverList::
    * **2 moteurs** avec réducteurs
    * **Deux étages** avec trous de fixations
    * Des **entretoises** pour fixer des cartes éléctroniques dessus
    * Une LiPo 2S (7.4V)

.. _montage:

.. textOnly::
    Ce chassis est livré non monté avec une notice claire et un tournevis adapté, il est très
    facile de le monter. On imprimera aussi des pieces pour faire tenir la caméra avec l'imprimante 3D.

.. slide::

Les actionneurs : la carte de contrôle
~~~~~~~~~~~~~~~~~

.. image:: /img/board.jpg
    :class: right

.. textOnly::
    La carte de contrôle éléctronique que vous utiliserez est une carte de contrôle moteur
    (nous en reparlerons dans `un prochain chapitre  <assemblage.html>`_). Elle comporte:

.. slideOnly::
    **Carte éléctronique de contrôle moteur**

.. discoverList::
    * Un micro-contrôlleur **ATmega 8** compatible **Arduino**
    * Des **entrées/sorties** ("GPIO")
    * Deux **Pont en H** capable de supporter 2.5A
    * Un **connecteur USB**

.. textOnly::
    Cette carte fait donc parfaitement l'affaire pour piloter le chassis ci-dessus.
    Chaque pont en H permettra de piloter une roue.

.. slide::

.. _se:

Le système de décision : le système embarqué
~~~~~~~~~~~~~~~~

.. image:: /img/raspberry.jpg
    :class: right

.. textOnly::
    A bord, nous mettrons également en place une **Raspberry Pi**, un véritable
    petit ordinateur *low-cost mais puissant*. Dessus, nous aurons:

.. slideOnly::
    **Raspberry Pi**

.. discoverList::
    * Un processeur **ARM** cadencé à **700Mhz**
    * **512Mo** de mémoire vive
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
    Enfin, nous installerons une caméra afin de faire de l'analyse d'image,
    il s'agit de la **logitech C310**:

.. slideOnly::
    **Logitech C310**

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

Contrôle des actionneurs: Arduino
~~~~~~~

.. image:: /img/arduino.png
    :class: right

.. textOnly::
    **Arduino** est une suite logicielle permettant de programmer facilement certains
    modèles de micro-contrôleurs. Nous utiliserons cette suite dans le but de programmer
    la carte de contrôle éléctronique et piloter les moteurs. Cet outil:

.. slideOnly::
    **Arduino**

.. discoverList::
    * Est multi-plateformes (Windows & Linux)
    * Permet un accès simplifié au matériel
    * Facilite la programmation des cartes compatibles (chargement du
      logiciel à bord)

.. discover::
    .. note::
        Nous l'utiliserons pour écrire un micro-logiciel, ou **firmware** qui
        pilotera les moteurs.

.. slide::

Système de décision: Debian
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

Design du hardware
~~~~~~

On téléchargera un logiciel de CAD pour le design des pieces 3D: `Autodesk Inventor Professional <http://students.autodesk.com/?nd=download_center>`_
