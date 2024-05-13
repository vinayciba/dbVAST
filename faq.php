<?php include 'include/header.php'; ?>


<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

<div class="accordation-container">
    <div class="accordion-content">
        <h2>FAQ</h2>

        <div class="accordion-item">
            <header class="item-header">
                <h4 class="item-question">
                    What is dbVAST?
                </h4>
                <div class="item-icon">
                    <i class='bx bx-chevron-down'></i>
                </div>
            </header>
            <div class="item-content">
                <p class="item-answer">
                    dbVAST stands for Database of Variations Associated with Shrimp Transcripts. It is a
                    comprehensive database that houses information about non-synonymous SNP (Single
                    Nucleotide Polymorphism) data and its significance (pathways, effects, protein stability etc.)
                    in two shrimp species: Penaeus vannamei and Penaeus indicus.
                </p>
            </div>
        </div>
        <div class="accordion-item">
            <header class="item-header">
                <h4 class="item-question">
                    How can I access dbVAST?
                </h4>
                <div class="item-icon">
                    <i class='bx bx-chevron-down'></i>
                </div>
            </header>
            <div class="item-content">
                <p class="item-answer">
                    You can access the dbVAST @ [website URL].
                </p>

            </div>
        </div>
        <div class="accordion-item">
            <header class="item-header">
                <h4 class="item-question">
                    What species are covered for SNP search in dbVAST?
                </h4>
                <div class="item-icon">
                    <i class='bx bx-chevron-down'></i>
                </div>
            </header>
            <div class="item-content">
                <p class="item-answer">
                    Currently, dbVAST provides support to search for SNPs in the coding sequence of two
                    species of shrimp: Penaeus vannamei and Penaeus indicus.
                </p>
            </div>
        </div>
        <div class="accordion-item">
            <header class="item-header">
                <h4 class="item-question">
                    What information is available for each SNP entry?
                </h4>
                <div class="item-icon">
                    <i class='bx bx-chevron-down'></i>
                </div>
            </header>
            <div class="item-content">
                <p class="item-answer">
                    For each SNP entry in dbVAST, you will find the following information:
                <ul>
                    <li>SNP ID: A unique identifier for the SNP.</li>
                    <li>Nonsynonymous/Synonymous SNP: Type of SNP variation</li>
                    <li>Pathways: KEGG pathway information for the SNP-harbouring transcript providing insights
                        into potential functional implications.</li>
                    <li>Functional impact of SNP: SIFT score (SNP is deleterious or tolerated), PANTHER
                        evaluation (potential damaging effects of the SNP), I-Mutant evaluation (stability of resulting
                        protein).</li>
                </ul>
                </p>

            </div>
        </div>
        <div class="accordion-item">
            <header class="item-header">
                <h4 class="item-question">
                    Can I search for SNPs by species or specific criteria?
                </h4>
                <div class="item-icon">
                    <i class='bx bx-chevron-down'></i>
                </div>
            </header>
            <div class="item-content">
                <p class="item-answer">
                    Absolutely. dbVAST provides flexible search options that allow you to search for SNPs based
                    on species and specific criteria of interest. Here is how you can search for SNPs:
                <ul>
                    <li>Visit the dbVAST website at [website URL].</li>
                    <li>On the homepage, you will find options to select the species. Choose either Penaeus
                        vannamei or Penaeus indicus, depending on your preference.</li>
                    <li>Once you have selected the species, you can proceed with the following two search
                        approaches:
                        <h6>Searching by Sequence:</h6>
                        <ul>

                            <li>Copy the sequence of interest (either nucleotide or protein) in fasta format.</li>
                            <li>Paste the Fasta sequence into the designated search field on the website.</li>
                            <li>Click on the &quot;Submit&quot; or &quot;Search&quot; button to initiate the search.</li>
                            <li>dbVAST will process the sequence and display the SNP details associated with the provided sequence.</li>
                        </ul>
                        <h6>Searching by Protein Name:</h6>
                        <ul>
                            <li>Type the specific protein name of interest into the designated search field on the website.</li>
                            <li>Click on the &quot;Submit&quot; or &quot;Search&quot; button to initiate the search.</li>
                            <li>dbVAST will process the protein name and display the SNP details associated with that protein.</li>
                        </ul>
                    </li>

                </ul>
                </p>
                <p class="item-answer">
                    The search results will provide you with the relevant SNP details, including information
                    about the SNP ID, nonsynonymous variations, significance (deleterious or tolerated),
                    stability, damaging effects, benign effects, and associated pathways.
                </p>
            </div>
        </div>
        <div class="accordion-item">
            <header class="item-header">
                <h4 class="item-question">
                    Can I contribute to dbVAST?
                </h4>
                <div class="item-icon">
                    <i class='bx bx-chevron-down'></i>
                </div>
            </header>
            <div class="item-content">
                <p class="item-answer">
                    Currently, the database is curated by a team of researchers, but if you have relevant SNP data
                    or additional information that could enhance the database, you can contact us using the
                    provided contact details on the website. We welcome collaborations and contributions to
                    further enrich the dbVAST resource.
                </p>
            </div>
        </div>
        <div class="accordion-item">
            <header class="item-header">
                <h4 class="item-question">
                    How can I report a problem or provide feedback?
                </h4>
                <div class="item-icon">
                    <i class='bx bx-chevron-down'></i>
                </div>
            </header>
            <div class="item-content">
                <p class="item-answer">
                    If you encounter any issues while using the dbVAST website or have feedback or suggestions
                    for improvement, please feel free to contact us using the provided contact information on the
                    website. We appreciate your input and will strive to address any problems or concerns
                    promptly.
                </p>
            </div>
        </div>
        <div class="accordion-item">
            <header class="item-header">
                <h4 class="item-question">
                    Is the source code used for developing dbVAST freely available?
                </h4>
                <div class="item-icon">
                    <i class='bx bx-chevron-down'></i>
                </div>
            </header>
            <div class="item-content">
                <p class="item-answer">
                    Yes. The source code of dbVAST is freely available at Github,
                    <a href="https://github.com/vinayciba/dbVAST">vinayciba/dbVAST</a>
                </p>
            </div>
        </div>
        <div class="accordion-item">
            <header class="item-header">
                <h4 class="item-question">
                    Do you expand the scope of dbVAST in future?
                </h4>
                <div class="item-icon">
                    <i class='bx bx-chevron-down'></i>
                </div>
            </header>
            <div class="item-content">
                <p class="item-answer">
                    Yes. The dbVAST would be expanded with SNP data of other shrimp species as and when
                    appropriate datasets become available in public repositories.
                </p>
            </div>
        </div>
        <div class="accordion-item">
            <header class="item-header">
                <h4 class="item-question">
                    Can users be able to download the extracted SNP information at dbVAST site?
                </h4>
                <div class="item-icon">
                    <i class='bx bx-chevron-down'></i>
                </div>
            </header>
            <div class="item-content">
                <p class="item-answer">
                    Yes. The users can download the table of SNP statistics that contains the SNP base positions,
                    the two alleles at the SNP position and the quality metrics indicating the accuracy of the SNP
                    position.
                </p>
            </div>
        </div>
        <div class="accordion-item">
            <header class="item-header">
                <h4 class="item-question">
                    Can I get functional significance of SNPs at dbVAST?
                </h4>
                <div class="item-icon">
                    <i class='bx bx-chevron-down'></i>
                </div>
            </header>
            <div class="item-content">
                <p class="item-answer">
                    Yes, at dbVAST, you can access the functional significance of the SNPs with the result of
                    various tools, including SIFT, PANTHER, and I-Mutant. This will provide valuable insights
                    about the functional impact of the identified SNPs.
                </p>
            </div>
        </div>
        <div class="accordion-item">
            <header class="item-header">
                <h4 class="item-question">
                    Can I obtain SNPs in a specific protein by providing its name at dbVAST?
                </h4>
                <div class="item-icon">
                    <i class='bx bx-chevron-down'></i>
                </div>
            </header>
            <div class="item-content">
                <p class="item-answer">
                    Certainly. At dbVAST, you have the option to retrieve SNPs associated with a specific protein
                    by providing its name. This feature allows you to focus on SNPs within your protein of
                    interest, facilitating targeted analysis and exploration.
                </p>
            </div>
        </div>
        <div class="accordion-item">
            <header class="item-header">
                <h4 class="item-question">
                    What are the criteria for including a SNP in dbVAST?
                </h4>
                <div class="item-icon">
                    <i class='bx bx-chevron-down'></i>
                </div>
            </header>
            <div class="item-content">
                <p class="item-answer">
                    At dbVAST, SNPs are selected for inclusion based on specific criteria to ensure data quality
                    and reliability. The following criteria are used to determine whether a SNP is included in the
                    database:

                <ul>
                    <li>Raw Read Depth: SNPs must have a raw read depth at the SNP site of ≥ 20.</li>
                    <li>Read Support: Both the reference and alternate alleles of the SNP must be supported by at
                        least 5 reads.</li>
                    <li>Quality Score: The phred-scaled quality score for the assertion made in the alternate allele
                        must be ≥ 100.</li>
                </ul>
                </p>


            </div>
        </div>

    </div>
</div>
<script>
    const accordionBtns = document.querySelectorAll(".item-header");
    accordionBtns.forEach((accordion) => {
        accordion.onclick = function() {
            this.classList.toggle("active");

            let content = this.nextElementSibling;
            console.log(content);
            if (content.style.maxHeight) {
                //this is if the accordion is open
                content.style.maxHeight = null;
            } else {
                //if the accordion is currently closed
                content.style.maxHeight = content.scrollHeight + "px";
                console.log(content.style.maxHeight);
            }
        };
    });
</script>

<?php include 'include/footer.php'; ?>