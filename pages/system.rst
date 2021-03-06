
.. slide:: middleSlide

Système embarqué
================

.. slide::

Présentation
------------

.. textOnly::
    A bord, comme :doc:`expliqué précédement <presentation#se>`, nous allons embarquer          
    une **Raspberry pi**. Cette carte joue le rôle d'un ordinateur.

Nous proposons d'utiliser **Raspbian** (port de **Debian** pour **Raspberry pi**) comme système d'exploitation à bord
de la **Raspberry pi**:

.. center::
    .. image:: /img/raspbian.png

.. discover::
    .. important::
        `Télécharger une image Raspbian → <http://www.raspberrypi.org/downloads>`_

.. textOnly::
    La mémoire principale de la **Raspberry pi** est une carte SD sur laquelle nous installerons
    le système d'exploitation.

.. slide::

Installation
------------

Raspbian est à installer sur la carte SD. Télécharger l'image et inscrivez la simplement sur la carte SD. Vous pourrez utiliser
une commande comme ``dd``, vous pouvez vous réferer à ce `tutoriel <http://elinux.org/RPi_Easy_SD_Card_Setup>`_.

Vous pourrez alors vous connecter en SSH à la carte avec les paramètres:

.. code-block:: txt
    adresse ip:   172.0.0.1
    identifiant:  pi
    mot de passe: raspberry

.. slide::

Paquets
-------

Les paquets suivants sont à installer:

.. code-block:: text

    apt-get install git libcv2.4 libcv-dev libopencv-contrib-dev \
          libopencv-gpu-dev libopencv-dev g++ apache2 cu cmake

.. textOnly::
    Ressources
    ----------

    * `Quick start guide Raspberry pi <http://www.raspberrypi.org/quick-start-guide>`_
    * `Télécharger une image Raspbian <http://www.raspberrypi.org/downloads>`_
    * `Tutoriel d'installation Raspbian <http://elinux.org/RPi_Easy_SD_Card_Setup>`_
