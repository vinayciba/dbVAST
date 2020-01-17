<html>
<title>dbVAST</title>
<center>
<img src="images\dbvast.png" height="250" width="1000" >
<body>

<br><br>

<table width="1000" CELLPADDING="10">
<tr>
<td width="100" rowspan="10" style="vertical-align:top">

<a href="index.php" style="white-space:nowrap"><img src="images\bhome.png"></a>
<a href="software.php" style="white-space:nowrap"><img src="images\software.png"></a>
<a href="faq.php" style="white-space:nowrap"><img src="images\faq.png"></a>
<a href="contact.php" style="white-space:nowrap"><img src="images\bcontact.png"></a>

</td>
<td  style="vertical-align:top"> 
<div style="font-size:20px" >

<b>1. What species are covered for SNP search in dbVAST?</b>
<br>At present, SNPs in transcripts of only two species of shrimp, <i>Penaeus vannamei</i> and <i>Penaeus indicus</i> can be searched at dbVAST.
<br>
<br>
<b>2. How many SNPs are hosted at dbVAST?</b>
<br>About 27,991 and 21,970 SNPs for <i>P. indicus</i> and <i>P. vannamei</i> respectively were present in the background database of dbVAST.
<br>
<br>
<b>3. What are the criteria for including a SNP in dbVAST?</b>
<br>The SNPs hosted at dbVAST were identified from RNAseq datasets. Only those SNP variations that satisfy the following criteria were included for search at dbVAST, a) the raw read depth at SNP site is ≥ 10; b) both the reference and alternate alleles are supported by at least 5 reads; and c) the phred-scaled quality score for the assertion made in alternate allele is ≥ 20.
<br>
<br>
<b>4. Is the source code used for developing dbVAST freely available?</b>
<br>Yes. The source code of dbVAST is freely available at Github, <a href="https://github.com/vinayciba/dbVAST">dbVAST</a>
<br>
<br>
<b>5. What components are there in the background database of dbVAST?</b>
<br>For each species, the main components in the background database of dbVAST are the annotated reference transcripts, their blast statistics and the SNP variations in them. For each species, initially a reference transcriptome was de novo assembled and annotated (annotated reference transcripts) against non- redundant protein database of GenBank (blast statistics). Later, SNPs in reference transcripts were identified by aligning pooled-sample RNAseq reads on to reference transcripts (SNP variations).
<br>
<br>
<b>6. Can I obtain SNPs in a gene, if I provide gene name at dbVAST?</b>
<br>No. Users have to input a query sequence. Then dbVAST displays SNPs in that reference transcript of background database that is more similar to the input query sequence, based on a simple blast search.
<br>
<br>
<b>7. Why only hepatopancreas tissue was used for building reference transcripts for <i>P. vannamei</i>?</b>
<br>For dbVAST, SNPs were identified by aligning pooled-sample RNAseq reads on to reference transcripts. For <i>P. vannamei</i>, datasets of pooled-sample RNAseq were available only for hepatopancreas tissue in public repositories. Therefore, for <i>P. vannamei</i> reference transcripts were also built using RNAseq datasets of only hepatopancreas tissue.
<br>
<br>
<b>8. Why only hepatopancreas, muscle and gill tissues were used for building reference transcripts for <i>P. indicus</i>?</b>
<br>For dbVAST, SNPs were identified by aligning pooled-sample RNAseq reads on to reference transcripts. For <i>P. indicus</i>, datasets of pooled-sample RNAseq were generated only for hepatopancreas, muscle and gill tissues in public repositories. Therefore, for P. indicus reference transcripts were also built using RNAseq datasets of only hepatopancreas muscle and gill tissues.
<br>
<br>
<b>9. Do you expand the scope of dbVAST in future?</b>
<br>Yes. The dbVAST would be expanded with SNP data of other shrimp species and tissues as and when individual and pooled-sample RNAseq datasets or near complete assembled genomes become available in public repositories.
<br>
<br>
<b>10. Can users be able to download the extracted SNP information at dbVAST site?</b>
<br>Yes. The users can download the sequence of the reference transcripts that is more similar to the input query sequence & the table of SNP statistics that contains the SNP base positions, the two alleles at the SNP position and the quality metrics indicating the accuracy of the SNP position.
<br>
<br>
<b>11. Can I get functional significance of SNPs at dbVAST?</b>
<br>No. The dbVAST only displays the SNP positions in the reference transcript. At present, the functional significance of the SNPs has to be explored by the user using other tools. In future, we would like to expand the scope of dbVAST with additional data related to functional significance of polymorphisms.
<br>
<br>
</div>
</td>

<?php

?>
