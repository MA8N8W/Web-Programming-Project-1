<?php
if(file_exists("./pages/common/header.php")) { include("./pages/common/header.php"); }
if(file_exists("./pages/common/header.php")) { include("./pages/common/navigation.php"); }
?>
<main id="main-content" className="wrapper" tabIndex="-1">
    <div>
        <p id="message"></p>
        <fieldset style="border: solid 1px var(--colour-dark); border-radius: var(--border-radius)">
            <legend style="margin-left: auto; margin-right: auto; font-size: 1.2rem; color: var(--colour-dark)"><strong><abbr title="Create, Read, Update, Delete">CRUD</abbr> Database Application</strong></legend>
            <form id="userform">
                <div className="form">
                    <input type="hidden" id="id"/>
                    <div class="singleline">
                        <div class="singleline" style="width: calc(calc(100% - 10px) / 2)">
                            <fieldset>
                                <legend>Frequency*</legend>
                                <input type="number" step="0.1" min="80" max="108" id="frequency"/>
                            </fieldset>
                            <fieldset class="spacer"></fieldset>
                            <fieldset>
                                <legend>Performance*</legend>
                                <input type="number" step="0.0001" min="0" id="performance"/>
                            </fieldset>
                        </div>
                        <fieldset class="spacer"></fieldset>
                        <fieldset>
                            <legend>Name*</legend>
                            <input type="text" id="name"/>
                        </fieldset>
                    </div>
                    <div class="singleline">
                        <fieldset style="width: calc(40% - 5px)">
                            <legend>Transmitter Location*</legend>
                            <input type="text" id="transmitter_location"/>
                        </fieldset>
                        <fieldset class="spacer"></fieldset>
                        <fieldset style="width: calc(60% - 5px)">
                            <legend>Address</legend>
                            <input type="text" id="address"/>
                        </fieldset>
                    </div>
                    <br/>
                    <div style="width: "100%", padding: 0, margin: 0">
                        <button id="submit" type="submit">Submit</button>
                        <button id="cancel" type="reset" style="display: none" onclick="clearData()">Cancel</button>
                    </div>
                </div>
            </form>
        </fieldset>
        <br/>
        <div>
            <table className="tablePageAxios">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Frequency</th>
                        <th>Performance</th>
                        <th>Name</th>
                        <th>Transmitter Location</th>
                        <th>Address</th>
                        <th class="buttonfield">Actions</th>
                    </tr>
                </thead>
            <tbody id="userTable">

            </tbody>
        </tbody>
    </table>
</div>
</div>
</main>
<script type="text/javascript" src="js/fetch_script.js"></script>
<?php if(file_exists("./pages/common/footer.php")) { include("./pages/common/footer.php"); } ?>
<script>
    <?php if(file_exists("./pages/common/navigationscript.php")) { include("./pages/common/navigationscript.php"); }?>
</script>
