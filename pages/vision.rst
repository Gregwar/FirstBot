
.. slide:: middleSlide

Vision : traitement de l'information des senseurs
======

.. slide::

Présentation
------------

Nous allons utiliser **OpenCV** pour la vision.

.. discover::
    Nous utiliserons aussi une bibliothèque C++ pour communiquer avec le port série. Normalement la bibliothèque est déjà installée sur votre carte.

.. slide::

Dépôt
-----

Un dépôt open-source est déjà disponible, il contient des exemples:

.. discover::
    .. important::
        `Dépôt AU324 sur GitHub →  <https://github.com/Gregwar/AU324>`_

.. slide::

Compilation
-----------

Pour compiler, nous utiliserons ``cmake``. Une fois dans le dossier AU324, voici la marche à suivre:

.. code-block:: text

    mkdir build
    cd build
    cmake ..
    make

.. slide::

Code
----

Le code contient deux fonctions d'exemple dans le fichier ``main.cpp``:

.. discoverList::
    * ``demoRobot()``: fait rouler le robot (il faudra sans doute adapter
      ``Robot.h`` et ``Robot.cpp`` pour l'adapter à votre communication série
    * ``demoCV()``: capture une image avec votre caméra et la sauvegarde dans le fichier test.jpg. 
	Pour le visionner, copier le fichier test.jpg dans le dossier ``/var/www``, connecter votre ordinateur à la raspberry pi par une connection ethernet, et visionner avec un browser de votre ordinateur ``http://172.0.0.1/test.jpg``.
