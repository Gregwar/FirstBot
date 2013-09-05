
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

.. slide::

Installation
------------

Télécharger l'image et inscrivez là simplement sur la carte SD. Vous pourrez utiliser
une commande comme ``dd``, vous pouvez vous réferer à ce `tutoriel <http://elinux.org/RPi_Easy_SD_Card_Setup>`_.

Vous pourrez alors vous connecter en SSH à la carte avec les paramètres:

.. code-block:: txt
    identifiant: pi
    mot de passe: raspberry

.. slide::

Paquets
-------

Vous pouvez installer les paquets suivants:

.. code-block:: txt

    apt-get install git libcv2.3 g++ apache2 cu cmake

.. textOnly::
    Ressources
    ----------

    * `Quick start guide Raspberry pi <http://www.raspberrypi.org/quick-start-guide>`_
    * `Télécharger une image Raspbian <http://www.raspberrypi.org/downloads>`_
    * `Tutoriel d'installation Raspbian <http://elinux.org/RPi_Easy_SD_Card_Setup>`_
