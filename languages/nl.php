<?php
add_translation('nl', array(
	'answers' => 'Antwoorden',
	'answers:addyours' => 'Voeg een antwoord toe',
	
	/**
	 * General stuff
	 */
	'item:object:answer' => "Antwoorden",
	'item:object:question' => "Vragen",
	
	/**
	 * Menu items
	 */
	'questions:menu:user_hover:make_expert' => "Maak Vragen Expert",
	'questions:menu:user_hover:remove_expert' => "Verwijdern Vragen Expert",
	
	'questions:menu:entity:answer:mark' => "Dit is correct",
	'questions:menu:entity:answer:unmark' => "Dit is niet correct",

	'questions:menu:filter:updated' => "Recent bijgewerkt",
	'questions:menu:filter:todo' => "Todo",
	'questions:menu:filter:experts' => "Experts",
	
	'river:create:object:question' => '%s stelde vraag %s',
	'river:create:object:answer' => '%s ga een antwoord op de vraag %s',
		
	'questions' => 'Vragen',
	'questions:asked' => 'Gesteld door %s',
	'questions:answered' => 'Laatst beantwoord door %s %s',

	'questions:everyone' => 'Alle Vragen',
	'questions:add' => 'Stel een vraag',
	'questions:todo' => 'Todo',
	'questions:updated' => 'Recent bijgewerkt',
	'questions:owner' => "%s's Vragen",
	'questions:none' => "Er zijn nog geen vragen gesteld.",
	'questions:group' => 'Groep vragen',
	'questions:enable' => 'Groep vragen inschakelen',

	'questions:edit:question:title' => 'Vraag',
	'questions:edit:question:description' => "Toelichting",
	'questions:edit:question:container' => "Waar moet deze vraag gesteld worden",
	'questions:edit:question:container:select' => "Selecteer een groep",
	
	/**
	 * experts page
	 */
	'questions:experts:title' => "Experts",
	'questions:experts:none' => "Er zijn nog geen experts toegekend aan %s.",
	
	/**
	 * expert notifications
	 */
	'questions:notify_experts:create:subject' => "Er is een nieuwe vraag gesteld",
	'questions:notify_experts:create:message' => "Beste %s,

De vraag: %s is gesteld.

Klik hier om de vraag te beantwoorden:
%s",
	'questions:notify_experts:moving:subject' => "Een vraag is verplaatst",
	'questions:notify_experts:moving:message' => "Beste %s,

De vraag: %s is verplaatst. U moet hem nu beantwoorden.

Klik hier om de vraag te beantwoorden:
%s",
	
	'questions:daily:notification:subject' => "Dagelijkse Vragen Todo",
	'questions:daily:notification:message:more' => "Bekijk meer",
	'questions:daily:notification:message:overdue' => "De volgende vragen zijn over hun beantwoordingstermijn",
	'questions:daily:notification:message:due' => "De volgende vragen moeten vandaag worden beantwoord",
	'questions:daily:notification:message:new' => "Nieuwe vragen",
	/**
	 * answers
	 */
	'questions:answer:edit' => "Antwoord bijwerken",
	'questions:answer:checkmark:title' => "%s heeft dit antwoord als het juiste antwoord aangemerkt op %s",
		
	/**
	 * plugin settings
	 */
	'questions:settings:general:title' => "Algemene instellingen",
	'questions:settings:general:close' => "Sluit een vraag als het als beantwoord wordt gemarkeerd",
	'questions:settings:general:close:description' => "Als een antwoord op een vraag als het juiste antwoord wordt gemarkeerd, sluit de vraag. Er kunnen dan geen nieuwe antwoorden meer worden gegeven.",
	'questions:settings:general:solution_time' => "Standaard beantwoordingstermijn in dagen",
	'questions:settings:general:solution_time:description' => "Het correcte antwoord moet gegeven worden voordat deze tijd verloopt. Groepen kunnen een afwijkende instelling hebben. Kies 0 voor geen oplostermijn.",
	'questions:settings:general:limit_to_groups' => "Beperk vragen to groepen",
	'questions:settings:general:limit_to_groups:description' => "Indien 'ja', kunnen vragen alleen in groepen worden gesteld.",
	
	'questions:settings:experts:title' => "Expert instellingen",
	'questions:settings:experts:enable' => "Activeer expert rollen",
	'questions:settings:experts:enable:description' => "Experts hebben speciale rechten. Ze kunnen door de site/groepsbeheerder worden toegewezen.",
	'questions:settings:experts:answer' => "Alleen experts kunnen antwoorden geven",
	'questions:settings:experts:mark' => "Alleen experts kunnen aangeven of een antwoord het juiste antwoord is",
	
	'questions:settings:access:title' => "Toegankelijkheids instellingen",
	'questions:settings:access:personal' => "Het toegangsniveau voor vragen in de persoonlijk context (niet in groep geplaatst)",
	'questions:settings:access:group' => "Het toegangsniveau voor vragen die in groepen worden gesteld",
	'questions:settings:access:options:user' => "Keuze aan de gebruiker",
	'questions:settings:access:options:group' => "Groepsleden",
	
	/**
	 * group settings
	 */
	'questions:group_settings:title' => "Vragen instellingen",
	'questions:group_settings:solution_time:description' => "Het correcte antwoord moet gegeven worden voordat deze tijd verloopt. Kies 0 voor geen oplostermijn.",
	
	/**
	 * Widgets
	 */

	'widget:questions:title' => "Vragen",
	'widget:questions:description' => "Overzicht van vragen",
	
	/**
	 * Actions
	 */
	
	'questions:action:answer:save:error:container' => "U heeft geen toestemming om een antwoord te geven op deze vraag",
	'questions:action:answer:save:error:body' => "Een antwoord is verplicht: %s, %s",
	'questions:action:answer:save:error:save' => "Er was een probleem met het opslaan van uw antwoord",
	'questions:action:answer:save:error:question_closed' => "De vraag die u probeert te beantwoorden is reeds gesloten",
	
	'questions:action:answer:toggle_mark:error:not_allowed' => "U heeft geen toestemming om dit antwoord als het correcte antwoord te markeren",
	'questions:action:answer:toggle_mark:error:duplicate' => "Er is alreeds een correct antwoord op deze vraag",
	'questions:action:answer:toggle_mark:success:mark' => "Het antwoord is gemarkeerd als het juiste antwoord",
	'questions:action:answer:toggle_mark:success:unmark' => "Dit antwoord is niet langer het juiste antwoord",
	
	'questions:action:question:save:error:container' => "U heeft geen toestemming om hier een vraag te stellen",
	'questions:action:question:save:error:body' => "Een vraag en toelichting is verplicht: %s, %s, %s",
	'questions:action:question:save:error:save' => "Er was een probleem met het opslaan van uw vraag",
	'questions:action:question:save:error:limited_to_groups' => "Vragen kunnen alleen in groepen worden gesteld. Selecteer aub een groep.",
	
	'questions:action:toggle_expert:success:make' => "%s is nu een vraag expert voor %s",
	'questions:action:toggle_expert:success:remove' => "%s is nu geen vraag expert meer voor %s",
	
	'questions:action:group_settings:success' => "De instellingen zijn opgeslagen",
));
