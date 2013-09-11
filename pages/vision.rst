
.. slide:: middleSlide

Vision
======

.. slide::

Dépôt
-----

Un dépôt open-source est déjà disponible, il contient des exemples:

.. discover::
    .. important::
        `https://github.com/Gregwar/AU324 <https://github.com/Gregwar/AU324>`_

.. slide::

Compilation
-----------

Pour compiler, nous utiliserons ``cmake``, voici la marche à suivre:

.. code-block:: text

    mkdir build
    cd build
    cmake ..
    make

.. slide::

Code
----

Le code contient deux fonctions d'exemple:

.. discoverList::
    * ``demo()``: fait fonctionner le robot (il faudra sans doute adapter
      ``Robot.h`` et ``Robot.cpp`` pour l'adapter à votre communication sére
    * ``demoCV()``: capture une image avec votre caméra et la sauve dans un fichier
