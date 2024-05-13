<?php include 'include/header.php'; ?>


<div class="about-container">
    <div class="about-content">
        <h2>dbVAST: database of Variations Associated
            with Shrimp Transcripts</h2>
        <div class="about-item">
            <p>dbVAST is a database of Single Nucleotide Polymorphisms (SNPs) in transcripts of two
                shrimp species, Penaeus indicus and Penaeus vannamei. Users can search the database with a
                query sequence and extract SNPs in it. The major components of dbVAST database are SNPs
                in coding sequences and its significance. The dbVAST is intended to benefit researchers and
                academicians by showcasing variations in the candidate coding sequences of shrimp.
            </p>
        </div>
        <div class="about-item">
            <h5>INPUT</h5>
            <p>The dbVAST is a retrievable database of SNPs in coding sequences. Users have to first select
                a shrimp species and then submit a query sequence or name of the protein in which he/she is
                interested to find SNP positions.</p>

        </div>
        <div class="about-item">
            <h5>OUTPUT</h5>
            <p>A blastn search is performed if a sequence is used as a query, to find the most similar
                transcript in the database for the selected species. The search based on protein name is
                straight forward. Then the following information is displayed for the most similar transcript
                or protein on the screen which can be also be downloaded.
            <ul>
                <li>The high-quality SNPs</li>
                <li>Its significance and stability</li>
                <li>KEGG pathway for the transcript or protein</li>
            </ul>

            </p>

        </div>
        <div class="about-item">
            <h5>AVAILABILITY</h5>
            <p>The dbVAST is available free as on-line web tool for users.</p>
        </div>
    </div>


</div>



<?php include 'include/footer.php'; ?>