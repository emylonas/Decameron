<?php
	$selected = "texts";
	$no_options = true;
	require '../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../">Main</a></li>
	<li><a href="index.php">Texts</a></li>
	<li><a href="concordance.php">The Online Concordance to the <i>Decameron</i></a></li>	
	<li>Concordance Help</li>	
</ul>
<h2>Concordance Help</h2>

<p>
If you experience problems while downloading the Acrobat PDF files within your browser, you may right-click on the link to download the file outside your browser or download the ZIP versions of the concordance and open them locally. Alternatively, you may set up Acrobat as a helper application. Follow the instructions below to carry out this procedure in Acrobat. If you have another version of the Reader, consult your program documentation.
<p>
<b>Setting up Acrobat as a helper application</b>
<p>
If your Web browser does not display PDF documents properly in the browser window, or if you prefer not to view PDF documents in the Web browser, you can set up Acrobat as a helper application in your browser's preferences. Then, when you view a PDF document on the Web, Acrobat will start and display the document. When Acrobat works as a helper application, you cannot use page-at-a-time downloading, form submittal in a browser, or search highlighting on the Web, and you cannot view embedded PDF documents.<br>

To set up your Web browser to recognize PDF files, you must define a MIME type and a file type. The file type should be pdf. The MIME type should be application/pdf. See your browser's documentation for information on configuring it.<br>
<p>
<b>Impostazione di Acrobat Readercome applicazione di aiuto</b>
<p>

Se il browser Web non visualizza in modo appropriato i documenti PDF nella finestra del browser, oppure se si preferisce non visualizzare i documenti PDF nel browser Web, &egrave; possibile impostare Acrobat Reader come applicazione di aiuto nelle preferenze del browser. Quindi, quando si visualizza un documento PDF sul Web, Acrobat Reader avvier&agrave; la visualizzazione del documento. Quando Acrobat Reader funziona come applicazione di aiuto, non &egrave; possibile utilizzare la Visualizzazione Web veloce, inoltrare moduli in un browser oppure eseguire evidenziazioni di ricerca sul Web. &Egrave; possibile impostare una preferenza di opzione in modo che tutti i documenti PDF sul Web si aprano in una nuova finestra di Acrobat Reader.<br>
Per impostare il browser Web in modo che riconosca i file PDF, &egrave; necessario definire un tipo MIME e un tipo di file. Il tipo di file deve essere pdf. Il tipo MIME deve essere applicazione/pdf. Consultare la documentazione del browser per informazioni sulle modalit&agrave; di configurazione.<br>

<?php
	$last_modified = filemtime($_SERVER["SCRIPT_FILENAME"]);
	include '../footer.php';
?>
