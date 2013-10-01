
.. slide:: middleSlide

Assemblage: le corps du robot 
==========

.. slide::

Chassis
-------

Montage
~~~~~~~

.. textOnly::
    Comme expliqué :doc:`précédement <presentation#montage>`, le chassis est livré
    en pièces à assembler, une notice claire et un tournevis, réferrez-vous donc
    à ces éléments pour l'assemblage!

.. center::
    .. image:: /img/components.jpg

.. important::
    A vos tournevis!

.. slide::

Moteurs
~~~~~~~

Les moteurs sont des `moteurs à courant continu <http://fr.wikipedia.org/wiki/Machine_%C3%A0_courant_continu>`_,
ils sont accompagnées d'une *gearbox*, ou boîte à engrenages.

.. discover::
    Ces derniers permettent de donner plus de couple aux moteurs, en en réduisant la vitesse

.. discover::
    .. center::
        .. image:: /img/gearbox.jpg
        Exemple de *gearbox* dans un servomoteur

.. slide::

Electronique
------------

Soudure
~~~~~~~

.. textOnly::
    Chaque moteur dispose de deux cosses, car il peut être alimenté dans les 
    deux directions (il tournera dans un sens ou dans l'autre).

    Nous allons souder des câbles sur ces cosses qui remonteront jusqu'à
    la carte de contrôle qui permettra ainsi de les piloter

    Au passage, nous regroupperons les câbles des deux moteurs gauche ensemble, et
    ceux des deux moteurs droits ensemble, souvenez-vous, nous n'avons que deux
    "Pont en H" (voir ci-dessous).

.. center::
    .. image:: /img/fils.jpg

.. note::
    
    Attention, lorsque vous regrouperez les câbles, il faudra que les deux moteurs
    ainsi rassemblés tournent dans le même sens une fois alimentés! 

.. textOnly::
    Si vous n'avez jamais soudé, n'hésitez pas à demander de l'aide et des conseils

    Au bout des soudures, nous plaçerons des connecteurs femelles de **2.54mm** de pas, qui
    nous permettrons plus tard de nous brancher sur la carte de contrôle

.. slide::

Connexions
~~~~~~~~~~

.. textOnly::
    Voici la carte de contrôle utilisée:

.. center::
    .. image:: /img/bigboard.jpg

Nous brancherons les moteurs sur "Left Motor" et "Right Motor", et la batterie sur
"Battery+/Battery-"

.. slide::

Pont en H
~~~~~~~~~

.. image:: /img/ponth.png
    :class: right

.. textOnly::
    Plus tôt, nous avons parlé de **Pont en H**, sans expliquer réellement de quoi
    il s'agissait.

    En fait, un pont en H est un réseau de transistor permettant de:

.. slideOnly::
    **Pont en H**

.. discoverList::
    * **Alimenter des moteurs** (en faisant passer de la puissance, ici 2.5A max)
    * Pouvoir gérer **la polarité**, et donc le sens de rotation

.. textOnly::
    En effet, les entrées/sorties standards de la carte **Arduino** ne permettent
    de fournir que ~20mA maximum, brancher un moteur dessus pourrait endomager la carte,
    le pont en H fournit à la fois la puissance et les deux directions

.. textOnly::
    Ressources
    ----------

    * `Fiche produit du chassis Dagu 4WD <http://www.robotshop.com/productinfo.aspx?pc=RB-Dag-71&lang=en-US>`_
    * `Fiche produit de la board de contrôle Dagu <http://robosavvy.com/store/product_info.php/manufacturers_id/35/products_id/3347>`_
    * `Fiche produit Raspberry Pi <http://piregistration.element14.com/raspberryPi1.html>`_
    * `Fiche produit des cartes SD <http://fr.farnell.com/element14/mmbtf04gwbca-xbmc/carte-sd-4go-xbmc-precharge/dp/2301513?in_merch=New%20Products>`_
    * `Fiche produit des piles LR6+chargeur <http://fr.farnell.com/gp-batteries/ar01bs210b-ew4/chargeur-recyko-nimh-2100mah-cells/dp/1781095>`_
    * `Fiche produit de la caméra Logitech C310 <http://fr.farnell.com/logitech/960-000586/webcam-5mp-c310-logitech/dp/1889752?Ntt=C310+logitech>`_
