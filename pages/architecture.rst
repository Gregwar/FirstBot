
.. slide:: middleSlide

Architecture du robot
=====================

.. slide::

Mécanique
-------

Montage
~~~~~~~

.. image:: /img/bioloid_brackets.jpg
    :class: right

Les servomoteurs sont équipés de *brackets*, qui sont des pièces plastiques
permettant de se prendre sur le côté du moteur.

Aussi, nous vous fourniront un ensemble de vis que vous pourrez utiliser pour
l'assemblage.

.. important::
    A vous de dessiner le châssis!

.. slide::

Électronique
------------

Alimentation
~~~~~~~~~~~~

Le robot est alimenté par une batterie 3S (environ *12V*). Ce voltage
est régulé pour fournir les *5V* nécessaires à la Raspberry Pi.

Les moteurs sont, eux, alimentés en direct par la batterie.

.. slide::

Servomoteurs
~~~~~~~~~~~~

Les **MX-12W** sont des servomoteurs intégrant différentes parties, à savoir:

.. discoverList::
    
    * Un **moteur DC**
    * Une **gearbox** (réducteur à base d'engrenages)
    * Un **encodeur** (ici magnétique)
    * Une électronique de contrôle, dont:
        * Un **pont en H**
        * Un bus de communication **série half-duplex**

.. slide::

Gearbox
~~~~~~~

Un moteur à courant continu classique fournit généralement une grande vitesse mais
à faible couple.

.. discover::

    .. center::
        .. image:: /img/gearbox.jpg
            :width: 250

    L'étage de réduction permet de réduire la vitesse du moteur et d'avoir plus de
    couple en contrepartie.


.. slide::

Pont en H
~~~~~~~~~

.. center::
    .. image:: /img/ponth.png
        :width: 300

.. textOnly::
    Plus tôt, nous avons parlé de **Pont en H**, sans expliquer réellement de quoi
    il s'agissait.

    En fait, un pont en H est un réseau de transistor permettant de:

.. slideOnly::
    Il permet de:

.. discoverList::
    * **Alimenter des moteurs** (en faisant passer de la puissance, ici 2.5A max)
    * Pouvoir gérer **la polarité**, et donc le sens de rotation

.. textOnly::
    En effet, les entrées/sorties standards d'un microcontrôleur ne permettent
    de fournir que quelques mA, brancher un moteur dessus n'est donc pas possible,
    le pont en H fournit à la fois la puissance et la possibilité d'inverser
    la direction.

.. slide::

Bus de communication
~~~~~~~~~~~~~~~~~~~~

Les servomoteurs Dynamixel sont équipés d'un connecteur à 3 contacts: la masse,
l'alimentation et le bus série.

.. discover::
    .. center::
        .. image:: /img/daisy_chain.jpg

.. discover::
    Ces trois fils sont **communs** à tous les moteurs branchés sur le bus.

.. discover::
    Chaque moteur est identifié logiciellement par un **ID**, numéro permettant de le
    reconnaître.

.. slide::

Connexion de l'*USB2AX*
~~~~~~~~~~~~~~~~~~~~~~~


Une fois la carte *USB2AX* branchée à votre ordinateur, elle sera reconnue comme un
périphérique série. Sous Linux, vous découvrirez un pseudo-fichier d'un
nom du type ``/dev/ttyUSB0``:

.. code-block:: text
    $ ls /dev/ttyUSB*
    /dev/ttyUSB0

Sous Windows, vous découvrirez un port **COMx**, ou **x** est un numéro que vous pourrez
déterminer en observant le gestionnaire de périphérique.

Testez que la carte est bien reconnue en vérifiant que le périphérique apparaît lors du branchement.

.. textOnly::
    Ressources
    ----------

    * `Page de manuel ROBOTIS MX-12W <http://emanual.robotis.com/docs/en/dxl/mx/mx-12w/>`_
    * `Documentation sur le protocole Dynamixel <http://emanual.robotis.com/docs/en/dxl/protocol1/>`_
