<?php
	session_start();
    ob_start();
    require_once('check-login.php');
	include_once 'header-logged-in.php';
?>

<script src="js/indiacoin.js" type="text/javascript"></script>

<script>

    function myTimer() {
        getNativeCurrencyBalance('txtMyAddress', 'pWalletBalance');
    }

    window.onload = function(){ myTimer(); setInterval(myTimer, 10000); };

</script>


<div class="container theme-showcase" role="main">

    <h2>Yobi-Wallet</h2>
    <br>

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <div class="row">
                <label><strong>Your Wallet Address</strong></label>
            </div>
            <div class="row">
                <input id="txtMyAddress" type="text" class="form-control" size=45 value="<?php echo $_SESSION['address'] ?>" readonly="readonly" />
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-4">
            <strong>Balance</strong> - <b><label id="pWalletBalance"></label></b>
        </div>
        <div class="col-md-1"></div>
    </div><br/>

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <section class="panel panel-primary">
                <header class="panel-heading">
                    <h2 class="panel-title">Send Yobicoins with Message</h2>
                </header>
                <div class="panel-body">
                    <form>

                        <div class="form-group">
                            <label class="col-sm-3 control-label"><strong>Send to </strong></label>
                            <div class="col-sm-9">
                                <input id="txtToAddrSWM" type="text" placeholder="" class="form-control" value="" size=50 />
                            </div>
                        </div>
                        <br/><br/><br/>

                        <div class="form-group">
                            <label class="col-sm-3 control-label"><strong>Message </strong></label>
                            <div class="col-sm-9">
                                <textarea id="txtMessageSWM" name="txtMessageSWM" rows="5" class="form-control" placeholder="Description" required></textarea>
                            </div>
                        </div>
                        <br/><br/><br/>

                        <div class="form-group">
                            <label class="col-sm-3 control-label"><strong>Indiacoins </strong></label>
                            <div class="col-sm-9">
                                <input id="txtUnitsSWM" type="number" step="any" placeholder="" class="form-control" value="1" width=30 />
                            </div>
                        </div>
                        <br/><br/><br/>

                        <div class="form-group">
                            <div class="col-sm-9">
                                <input type="reset" class="mb-xs mt-xs mr-xs btn btn-primary" onclick="sendMetadataToAddress('txtMyAddress', 'txtToAddrSWM', 'txtMessageSWM', 'txtUnitsSWM', this, 'outputSWM');" value="Send">
                            </div>
                        </div><br/><br/><br/>

                        <div id="outputSWM" class="appear-animation bounceIn appear-animation-visible">
                        </div>

                    </form>
                </div>
            </section>
        </div>

        <div class="col-md-1"></div>
        
    </div>

</div>

<?php
	include_once 'footer.php';
	ob_end_flush();
?>