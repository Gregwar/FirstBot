.. slide:: middleSlide

Présentation
============

.. slide::

Support
-------
Nguyen Sao Mai : nguyensmai@gmail.com

Passault Grégoire : g.passault@gmail.com

Ce support est accessible à l'adresse suivante:

.. important::
    `http://gregwar.com/firstbot/ <http://gregwar.com/firstbot/>`_

.. note::

    Les slides sont incorporés au contenu

.. slide::

Vidéo
-----

.. center::
    .. youtube:: QNsnn63xhFU


.. slide::

Qu'est-ce qu'un robot?
------------------
.. discover::
Robot vs automate vs machine

.. slide::
Au niveau conceptuel
~~~~~~~
Un robot est composé schématiquement de 3 parties: 
.. discoverList::
* des **actuateurs**: permettent au robot d'agir sur/de modifier son environnement. Ex : jambes, mains, cordes vocales, roues, enceintes ...
* des **senseurs**: permettent au robot de mesurer/de surveiller son environnement. Ex: yeux, nez, la peau, oreilles, camera, micro, sonde laser, sonde ultra-son...
* un **système de décision**: permet au robot d'adapter son comportement en fonction de son environnement. Ex: le cerveau.   

.. slide::
Au niveau matériel
~~~~~~~
.. discoverList::
* le **corps du robot**:  les composants du système de décision, des senseurs et actuateurs bruts.

.. discover::
Science des matériaux, électronique, modélisation, bricolage; 
IT 358: Systèmes embarqués; 
AU 325: Modélisation et analyse.

.. discoverList::
* des **systèmes de contrôle** des moteurs (actuateurs).

.. discover::
Automatique, Contrôle.

.. discoverList::
* des systèmes de **traitement de l'information** des senseurs.

.. discover::
MA 300: Statistiques; 
TS 341: Outils d'imagerie pour la robotique.
 
.. discoverList::
* des systèmes de **prise de décision** (système embarqué).

.. discover::
MA 300: Statistiques; 
AU 318: Sûreté de fonctionnement; 
IF 314: Interaction homme-robot.
 
.. textOnly::
Liste des cours: 
~~~~~~~
.. textOnly::
* LC 301: Génie Logiciel
* IF 314: Développement logiciel guidé par modélisation et vérification
* AU 325: Modélisation et analyse
* TS 341: Outils d'imagerie pour la robotique
* MA 300: Statistiques
* AU 318: Sûreté de fonctionnement
* IF 314: Interaction homme-robot
* IT 358: Systèmes embarqués


.. slide::
Objectif du projet
------------------

.. textOnly::

    **FirstBot** est un projet consistant à créer son propre robot, et
    par la même occasion apprendre:

.. slideOnly::
    des bases de robotique et de l'embarqué

.. discoverList::
    * le contrôle des **actuateurs** du robot:
     Comment piloter un moteur?
     Comment programmer des petits micro-contrôleurs? En l'occurence
      on utilisera dans ce projet une carte compatible `Arduino <http://arduino.cc>`_

    * le système de **décision** (intelligence artificielle) du robot:
     Comment utiliser un système embarqué? En l'occurence
      on utilisera dans ce projet une
      `Raspberry pi <http://www.raspberrypi.org/>`_
    * l'exploitation des **senseurs** du robot:
     Comment faire de l'analyse d'image? En l'occurence
      on utilisera dans ce projet `OpenCV <http://opencv.org/>`_

.. discover::
    .. important::
        Mais surtout, comment faire fonctionner tout ensemble et coordonner
        le robot?



