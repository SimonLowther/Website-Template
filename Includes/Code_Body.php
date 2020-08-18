<link rel="stylesheet" href="/css/code_body.css">
<div class='code_body'>
    <div class="code_menu">
        <ul>
            <li>
                <h3>Java</h3>
            </li>
            <li><a href="#PiCalc">Pi Calculator</a></li>
            <li><a href="#RosterScraper">Roster Scraper</a></li>
            <li><a href="#MemberDataBase">Membership Database</a></li>
            <li></li>
            <li>
                <h3>PHP</h3>
            </li>
            <li><a href="#thisWebsite">Portfoilio Website</a></li>
            <li><a href="#WPress">Wordpress Plugin</a></li>
            <li></li>
        </ul>
    </div>

    <div class="code_display">

        <div class="code_preamble">
            The following are code snippets from various projects. The entire projects are available either from
            GitHub or on request where the project contains sensitve information.<br>

            This is not an exhustive list of projects and more example is available on request.<br>

            Full project files are available on Github , by clicking on Octocat. <a href="https://GitHub.com/SimonLowther"><img src="/Resources/GitHub-Mark-32px.png" alt="GitHub Mark"></a>
        </div>

        <div id="PiCalc">
            <h2>PI Calculator</h2><br>
            <div class="code_preamble">
                This java snippet of a class which calculates Pi to any number of deciaml places. This class
                can be run from command line or instanciated as an object.

            </div><br>
            <pre>
                <code>
                 <?php highlight_file($_SERVER['DOCUMENT_ROOT'] . "/Resources/Code_Snippits/PiCalc_snippit.txt") ?>
                </code>
            </pre>
        </div>
        <div id="RosterScraper">
            <h2>Roster Scraper<br></h2>
            <div class="code_preamble">
                This java snippet of a web scraper which downloads an Air New Zealand pilots roster as both a PDF
                and iCalendar file. This uses Selenium webdriver for controlling of a firefox instance.
            </div><br>
            <pre>
                <code>
                    <?php highlight_file($_SERVER['DOCUMENT_ROOT'] . "/Resources/Code_Snippits/Scraper_snippit.txt") ?>
                </code>
            </pre>
        </div>
        <div id='MemberDataBase'>
            <h2>Membership Database JavaFX Project</h2><br>
            <div class="code_preamble">
                This snippet from a JavaFX project. This database front end allowed for tracking of membership fees, yearbook
                fees and sent out letters and invoices at year end. It also tracked multiple membrship types. This is just a small
                part of a larger project. The entire file set is available on request.
            </div><br>

            <pre>
                <code>
                    <?php highlight_file($_SERVER['DOCUMENT_ROOT'] . "/Resources/Code_Snippits/javaFXsnippet.txt") ?>
                </code>
            </pre>
        </div>
        <div class="" id="thisWebsite">
            <h2>This Website Template</h2><br>
            <div class="code_preamble">
                This website is built using PHP, HTML and CSS. Here are some of the files behind the site.
            </div><br>
            <h4>in file: Header.php</h4>
            <pre>
                <code>
                    <?php highlight_file("Header.php"); ?>
                </code>
            </pre><br>
            <h4>in file: Contact.php</h4>
            <pre>
                <code>
                    <?php highlight_file('Contact_Body.php'); ?>
                </code>
            </pre>
            <h4>in file: portfolio.php</h4><br>
            <pre>
                <code>
                    <?php highlight_file("portfolio.php"); ?>
                </code>
            </pre>
        </div>
        <div id='WPress' class=''>
            <h2>My Website - Wordpress Plugin</h2><br>
            <div class="code_preamble">
                This plugin is used on several managed websites mainly as a portal for clients to access help files.
            </div><br>
            <h4>In file: MyWebsite.php</h4>
            <pre>
                <code>
                    <?php highlight_file($_SERVER['DOCUMENT_ROOT'] . "/Resources/Code_Snippits/plugin_snippit.txt") ?>                 
                </code>
            </pre>
            <h4>In file: admin-template.php</h4>
            <pre>
                <?php highlight_file($_SERVER['DOCUMENT_ROOT'] . "/Resources/Code_Snippits/admin-template.txt") ?> 
            </pre>
        </div>

    </div>
</div>