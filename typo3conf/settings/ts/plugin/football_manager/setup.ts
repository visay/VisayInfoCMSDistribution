plugin.tx_footballmanager {
	view {
		templateRootPath = {$plugin.tx_footballmanager.view.templateRootPath}
		partialRootPath = {$plugin.tx_footballmanager.view.partialRootPath}
		layoutRootPath = {$plugin.tx_footballmanager.view.layoutRootPath}
	}
	persistence {
		storagePid = {$plugin.tx_footballmanager.persistence.storagePid}
	}
	features {
		# uncomment the following line to enable the new Property Mapper.
		# rewrittenPropertyMapper = 1
	}
}

plugin.tx_footballmanager._CSS_DEFAULT_STYLE (
	.tx-football-manager img.img-circle {
		box-shadow: 0 0 8px rgba(0, 0, 0, .8);
		-webkit-box-shadow: 0 0 8px rgba(0, 0, 0, .8);
		-moz-box-shadow: 0 0 8px rgba(0, 0, 0, .8);
	}

	.tx-football-manager table td,
	.tx-football-manager table th {
		text-align: center;
		vertical-align: middle;
	}

	.tx-football-manager table form,
	.tx-football-manager table form select {
		margin-bottom: 0;
	}

	.tx-football-manager table select {
		width: 100%;
	}
)