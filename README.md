# LARAVEL TEST

## SOCCER TEAM MANAGEMENT SYSTEM

### LARAVEL UNITED SOCCER

Develop a software using PHP with Laravel framework to manage the lineups of athletes on a fictitious football team.
The software must store the following attributes:
- Player’s name;
- Player's number;
- Player's position;
- Match start datetime;
- Match finish datetime;
- Opposing team;
- Nominated players for each match;

### FUNCTIONAL REQUIREMENTS:

- The software must contain the following features:
    + Players registration:
		* On this page the user will manage the team's players. Remembering that the attributes of the players must be:
          - Name
          - Number
          - Position
            
	+ Matches registration:
		* On this page the user will manage the matches played by the team. Remembering that the attributes of the matches must be:
            - Match start datetime (this field must not be manipulated by the user on the insert and update forms);
            - Match finish datetime (this field must not be manipulated by the user on the insert and update forms);
            - Opposing team;
            - List of nominated players to the match;

		* On the match register, there must be a feature for the user to trigger the match start. At this point, the software must update the datetime start attribute with the current datetime;

	+ Reports:
		* The software must have the following reports:

    + Played matches: This report should list all played matches and the respective lineups. It must contain only a start and end date as filter. The report should show the following columns:
        * Match date;
        * Opposing team;
        * Lineup;

    + Total lineups per player: This report should list all team players and how many times each one was nominated. For this report, no filter is needed; The report should show the following columns:
        * Player name;
        * Amount of matches;

	+ User login:
		* It is not necessary to have any type of access control to the software;

### TECHNICAL REQUIREMENTS:

- It is mandatory to use the following Laravel features::
	+ Repositories (prettus/l5-repository);
	+ Entities;
	+ FormRequest Validation;
	+ Observers: Observer must be used to feed a log table. Therefore, at each new lineup, the software must insert, the match ID and the ID of each nominated player;
	+ Jobs: Job must be used so that when the user triggers the match start, the software updates the finish datetime after exactly 90 seconds (it may not make sense in a real world, but it is only to rate the Job's knowledge);
	+ Requested reports in the functional requirements, must also be available through API's;

- The following versions must be used:
	+ PHP >= 7.2
	+ Laravel 8

- Once completed, the project should be shared on GitHub.

- PS: There is no need to worry about the software UI, because it will not be the main evaluation point for a while.
