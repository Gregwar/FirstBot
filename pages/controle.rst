
.. slide:: middleSlide

Contrôle
========

.. textOnly::
    .. warning::
        Dans cette partie, nous apprendrons à programmer la carte de contrôle
        éléctronique et à l'utiliser. Vous n'utiliserez pas la Raspberry pi mais
        votre propre ordinateur.

.. textOnly::
    Maintenant, vous devriez avoir assemblé votre chassis et soudé les
    câbles,

.. slide::

Utiliser la carte
-----------------

Présentation
~~~~~~~~~~~~

La carte peut se brancher à l'aide d'un câble mini-USB

.. warning::
    Vous ne pouvez (et ne devez) **pas alimenter les moteurs en USB**, pour leur fournir
    de l'alimentation, il faudra utiliser des batteries connectées au port "battery+/-"
    et allumer le bouton de la carte

.. slide::

Connexion
~~~~~~~~~

.. textOnly::
    Une fois la carte branchée à votre ordinateur, elle sera reconnue comme un
    périphérique série. Sous Linux, vous découvrirez un pseudo-fichier d'un
    nom du type ``/dev/ttyUSB0``:

.. code-block:: text
    $ ls /dev/ttyUSB*
    /dev/ttyUSB0

.. textOnly::
    Sous windows, vous découvrirez un port **COMx**, ou **x** est un numéro que vous pourrez
    déterminer en observant le gestionnaire de périphérique.

    Testez que la carte est bien reconnue en vérifiant que le périphérique apparaît lors du branchement.

.. slide::

Arduino
-------

Téléchargement
~~~~~~~~~~~~~~

Vous pouvez télécharger et installer **Arduino** ici:

.. important::
    `Télécharger Arduino → <http://arduino.cc/en/Main/Software>`_

.. textOnly::
    Une fois installé et lancé, vous devriez voir cette fenêtre s'ouvrir:

.. discover::
    .. center::
        .. image:: /img/ide.jpg

.. slide::

Premier programme
~~~~~~~~~~~~~~~~~

.. textOnly::
    En guise de premier programme, vous pouvez écrire le strict minimum:

.. code-block:: c

    // Initialisation
    void setup() {
    }

    // Boucle principale
    void loop() {
    }

.. textOnly::
    .. note::
        Arduino est basé sur un compilateur C/C++, cela ne ressemble pas uniquement
        à du C/C++, c'en est!

Choisissez le modèle de board ``Arduino NG or older with ATMEGA8``, et le port
série qui convient, et essayer de charger votre programme à bord.

.. slide::

Piloter les pins
~~~~~~~~~~~~~~~~

.. textOnly::
    La fonction ``pinMode()`` permet de définir le "sens" de la pin (entrée
    ou sortie)

Il est possible de piloter des pins de deux façons:

.. discoverList::
    * En binaire, avec ``digitalWrite()``, le niveau est soit bas soit haut
    * En rapport cyclique (sortie "PWM"), avec ``analogWrite()``

.. textOnly::
    Une pin pilotée en rapport cyclique produira un signal à relativement haute
    fréquence (au moins plusieurs centaines de Hz), avec un rapport cyclique, c'est
    à dire un ratio haut/bas défini par le paramètre de ``analogWrite`` entre
    ``0`` et ``255``

.. discover::
    .. center::
        .. image:: /img/pwm.png

.. textOnly::
    N'hésitez pas à lire la documentation officielle:

    * `pinMode() <http://arduino.cc/en/Reference/pinMode>`_
    * `digitalWrite() <http://arduino.cc/en/Reference/digitalWrite>`_
    * `analogWrite() <http://arduino.cc/en/Reference/analogWrite>`_

.. slide::

Pilotage moteurs
~~~~~~~~~~~~~~~~

Voici les pins **Arduino** permettant de piloter les moteurs:

.. discoverList::
    * La pin **9** est la vitesse du moteur gauche
    * La pin **7** est la direction du moteur gauche
    * La pin **10** est la vitesse du moteur droit
    * La pin **8** est la direction du moteur droit

.. slide::

Exemple
~~~~~~~

.. textOnly::
    Par exemple, voici comment faire tourner les roues de gauche:

.. code-block:: C

    void setup() {
        // Vitesse moteur gauche
        pinMode(9, OUTPUT);
        // Direction moteur gauche
        pinMode(7, OUTPUT);
    }

    void loop() {
        // Sens
        digitalWrite(7, LOW);
        // Vitesse: 100/255
        analogWrite(9, 100);
    }

.. textOnly::
    Ce code fera tourner les roues de gauche de 100/255eme de la puissance
    que l'on peut leur fournir. La direction peut être modifiée à l'aide de la
    pin ``7``.

    Vous pourrez alors faire tourner les moteurs plus ou moins vite et dans
    les deux directions.

Communication série
~~~~~~~~~~~~~~~~~~~

.. textOnly::
    Vous vous en doutez, vous n'allez pas reprogrammer la carte à chaque fois que vous
    voudrez changer les ordres envoyés aux moteurs

Pour dialoguer entre votre ordinateur et la carte, vous pouvez utiliser
une liaison **série**, pour cela, vous ferez appel au module `Serial <http://arduino.cc/en/Reference/Serial>`_
de Arduino.

Vous pouvez par exemple utiliser le moniteur série Arduino pour tester.

.. slide::

Objectif
--------

Le but est de pouvoir piloter les moteurs à l'aide de votre ordinateur en envoyant
des ordres à la carte en série.

.. discover::
    .. important::
        A vous de jouer!

.. textOnly::
    Ressources
    ----------

    * `Téléchargement de Arduino <http://arduino.cc/en/Main/Software>`_
    * `Prise en main de Arduino <http://arduino.cc/en/Guide/HomePage>`_
    * `Référence des fonctions Arduino <http://arduino.cc/en/Reference/HomePage>`_
    * `Documentation de Serial <http://arduino.cc/en/Reference/Serial>`_
    * `Fiche produit de la board de contrôle Dagu <http://robosavvy.com/store/product_info.php/manufacturers_id/35/products_id/3347>`_

