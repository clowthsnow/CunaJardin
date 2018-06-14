<section id="content">

    <!--breadcrumbs start-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h5 class="breadcrumbs-title">Helpers</h5>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Dashboard</a>
                        </li>
                        <li><a href="#">CSS</a>
                        </li>
                        <li class="active">Helpers</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->


    <!--start container-->
    <div class="container">
        <div class="section">

            <p class="caption">You don't need to create new css class for simple edits.We already did it for you.</p>
            <div class="divider"></div>

            <div class="divider"></div>
            <div id="text-align" class="section">
                <h4 class="header">Text Align</h4>
                <div class="row">
                    <div class="col s12 m4 l3">
                        <p>Right Aligned</p>
                        <code class="language-markup">class="right-align"</code>
                    </div>
                    <div class="col s12 m8 l9">
                        <div class="card-panel">
                            <p class="right-align">This text is right aligned. Set in the year 0 F.E. ("Foundation Era"), The Psychohistorians opens on Trantor, the capital of the 12,000-year-old Galactic Empire. Though the empire appears stable and powerful, it is slowly decaying
                                in ways that parallel the decline of the Western Roman Empire.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m4 l3">
                        <p>Left Aligned</p>
                        <code class="language-markup">class="left-align"</code>
                    </div>
                    <div class="col s12 m8 l9">
                        <div class="card-panel">
                            <p class="left-align">In English and most European languages where words are read left-to-right, text is usually aligned "flush left", meaning that the text of a paragraph is aligned on the left-hand side with the right-hand side ragged. This is the default
                                style of text alignment on the World Wide Web for left-to-right text Quotations are often indented.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m4 l3">
                        <p>Center Aligned</p>
                        <code class="language-markup">class="center-align"</code>
                    </div>
                    <div class="col s12 m8 l9">
                        <div class="card-panel">
                            <p class="center-align">Text can also be "centered", or symmetrically aligned along an axis in the middle of a column. This is often used for the title of a work, headlines, and for poems and songs. As with flush-right alignment, centered text is often used
                                to present data in tables. Centered text is considered less readable for a body of text made up of multiple lines because the ragged starting edges make it difficult for the reader to track from one line to the next.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m4 l3">
                        <h4 class="header">Vertical Align</h4>
                        <p>You can easily vertically center things by adding the class <code class="language-markup">class="valign-wrapper"</code> to the container holding the items you want to vertically align.</p>
                    </div>
                    <div class="col s12 m8 l9">

                        <div class="valign-demo valign-wrapper">
                            <h5 class="valign center" style="width: 100%;">This should be vertically aligned</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>

            <div id="hiding-content" class="section">
                <h4 class="header">Hiding Content</h4>
                <div class="row">
                    <div class="col s12 m4 l3">
                        <p>We provide easy to use classes to hide content on specific screen sizes.</p>
                    </div>
                    <div class="col s12 m8 l9">
                        <div class="card-panel">
                            <table class="striped">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Screen Range</th>
                                        <th>Display Test</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code class="language-markup">.hide-on-small-only</code>
                                        </td>
                                        <td>Hidden for Mobile Only</td>
                                        <td>
                                            <p class="hide-on-small-only">Check Me !</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code class="language-markup">.hide-on-med-only</code>
                                        </td>
                                        <td>Hidden for Tablet Only</td>
                                        <td>
                                            <p class="hide-on-med-only">Check Me !</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code class="language-markup">.hide-on-med-and-down</code>
                                        </td>
                                        <td>Hidden for Tablet and Below</td>
                                        <td>
                                            <p class="hide-on-med-and-down">Check Me !</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code class="language-markup">.hide-on-med-and-up</code>
                                        </td>
                                        <td>Hidden for Tablet and Above</td>
                                        <td>
                                            <p class="hide-on-med-and-up">Check Me !</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code class="language-markup">.hide-on-large-only</code>
                                        </td>
                                        <td>Hidden for Desktop Only</td>
                                        <td>
                                            <p class="hide-on-large-only">Check Me !</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="divider"></div>
            <div id="truncation" class="section">
                <h4 class="header">Truncation</h4>
                <div class="row">
                    <div class="col s12 m4 l3">
                        <p>To truncate long lines of text in an ellipsis, add the <code class="language-markup">class="truncate"</code> to the tag which contains the text. See an exaple below of a header being truncated inside a card.</p>
                    </div>
                    <div class="col s12 m8 l9">
                        <div class="card-panel">
                            <p>Normal: This is a paragraph. Paragraphs are preset with a font size, line height and spacing to match the overall vertical rhythm.</p>
                            <p class="truncate">Truncate: This is a paragraph. Paragraphs are preset with a font size, line height and spacing to match the overall vertical rhythm.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--end container-->

</section>