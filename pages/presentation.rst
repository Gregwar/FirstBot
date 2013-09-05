.. slide:: middleSlide

Présentation
============

.. slide::

Objectif du projet
------------------

.. textOnly::

    **FirstBot** est un projet consistant à créer son propre robot, et
    par la même occasion apprendre des choses, notamment:

.. discoverList::
    * Comment **piloter un moteur**?
    * Comment programmer des **petits micro-contrôleurs**?, en l'occurence
      à l'aide d'une carte compatible `Arduino <http://arduino.cc>`_
    * Comment utiliser un **système embarqué**? En prenant en main une
      `Raspberry pi <http://www.raspberrypi.org/>`_
    * Comment faire de **l'analyse d'image**? Avec `OpenCV <http://opencv.org/>`_

.. discover::
    .. important::
        Mais surtout, comment faire fonctionner tout ensemble et coordoner
        le robot?

.. slide::

Matériel
--------

Chassis
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
    * **4 moteurs** avec réducteurs
    * **Deux étages** avec trous de fixations
    * Des **entretoises** pour fixer des cartes éléctroniques dessus
    * Un **coupleur de piles** 4xAA

.. _montage:

.. textOnly::
    Ce chassis est livré non monté avec une notice clair et un tournevis adapté, il est très
    facile de le monter

.. slide::

Carte de contrôle
~~~~~~~~~~~~~~~~~

.. image:: /img/board.jpg
    :class: right

.. textOnly::
    La carte de contrôle éléctronique que vous utiliserez est une carte de contrôle moteur
    (nous en reparlerons dans un prochain chapitre). Elle comporte:

.. slideOnly::
    **Carte éléctronique de contrôle moteur**

.. discoverList::
    * Un micro-contrôlleur **ATmega 8** compatible **Arduino**
    * Des **entrées/sorties** ("GPIO")
    * Deux **Pont en H** capable de supporter 2.5A
    * Un **connecteur USB**

.. textOnly::
    Cette carte fait donc parfaitement l'affaire pour piloter le chassis ci-dessus,
    étant donné que nous ne disposons que de deux ponts en H, nous piloterons les roues
    deux par deux (les deux droites et les deux gauches)

.. slide::

.. _se:

Système embarqué
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
    Cette carte vous permettra de piloter le robot, la puissance de calcul sera
    un réel atout pour effectuer l'analyse d'image

.. slide::

Caméra
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
    * Peut **descendre en résolution** pour augmenter en fréen fréen fréquence

.. textOnly::
    Cette caméra sera branchée à la **Raspberry Pi** qui en extraiera des images pour
    piloter le tout

    .. note::
        Le tout sera alimenté par **4 piles AA (LR6) NiMH** que nous disposerons dans le
        coupleur livré avec le chassis.

.. slide::

Logiciel
--------

Arduino
~~~~~~~

.. image:: /img/arduino.png
    :class: right

.. textOnly::
    **Arduino** est une suite logicielle permettant de programmer facilement certain
    modèles de micro-contrôleurs. Nous utiliserons cette suite dans le but de programmer
    la carte de contrôle éléctronique et piloter les moteurs. Cet outil est:

.. slideOnly::
    **Arduino**

.. discoverList::
    * Multi-plateformes (Windows & Linux)
    * Accès simplifié au matériel
    * Facilité de programmation des cartes compatibles (chargement du
      logiciel à bord)

.. discover::
    .. note::
        Nous l'utiliserons pour écrire un micro-logiciel, ou **firmware** qui
        pilotera les moteurs.

.. slide::

Debian
~~~~~~

.. image:: /img/debian.png
    :class: right

.. textOnly::
    **Debian** est un système d'exploitation très répandu. Ce sera le système
    que nous utiliserons à bord de la Raspberry Pi. Il est:

.. slideOnly::
    **Debian**

.. discoverList::
    * Une **distribution de Linux**
    * Possède une version spécialement optimisée pour **Raspberry pi**
    * Très connu et utilisé (Ubuntu est basé dessus)

.. textOnly::

    Vous pourrez alors vous connecter à la **Raspberry pi** par **SSH** par
    exemple et accéderez alors à la caméra et à la carte de contrôle des moteurs
    avec la puissance d'un système d'exploitation et d'un "gros" processeur.

.. slide::

OpenCV
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
    * Est assez **documenté** et facile d'emploi
    * Contient de nombreuses **fonctions d'analyse d'image** clé en main

.. textOnly::
    Elle vous permettra d'extraire les images de la caméra et de les analyser pour
    piloter votre robot

