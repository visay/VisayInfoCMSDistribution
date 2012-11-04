	# General constants
constant {
	sender_email = noreply@visay.info
	to_email = keo@visay.info
}

	# sr_feuser_register extension
<INCLUDE_TYPOSCRIPT: source="FILE: EXT:sr_feuser_register/static/css_styled/constants.txt">
plugin.tx_srfeuserregister_pi1.confirmPID = 21
plugin.tx_srfeuserregister_pi1.editPID = 17
plugin.tx_srfeuserregister_pi1.registerPID = 14
plugin.tx_srfeuserregister_pi1.confirmInvitationPID = 0
plugin.tx_srfeuserregister_pi1.linkToPID = 0
plugin.tx_srfeuserregister_pi1.loginPID = 13
plugin.tx_srfeuserregister_pi1.pid = 19
plugin.tx_srfeuserregister_pi1.userGroupUponRegistration = 1
plugin.tx_srfeuserregister_pi1.userGroupAfterConfirmation = 2

	# formhandler extension
<INCLUDE_TYPOSCRIPT: source="FILE: typo3conf/settings/ts/plugin/formhandler/constants.ts">