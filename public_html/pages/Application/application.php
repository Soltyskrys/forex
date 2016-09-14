<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <button type="button" class="btn btn-default btn-md" onclick="appController.showOnly('strategy')">
                Strategy
            </button>
            <button type="button" class="btn btn-default btn-md" onclick="appController.showOnly('input-indicators')">
                Input Indicators
            </button>
            <button type="button" class="btn btn-default btn-md" onclick="appController.showOnly('output-indicators')">
                Output Indicators
            </button>

            <button type="button" class="btn btn-default btn-md pull-right" onclick="appController.showOnly('summary')">
                Summary
            </button>
        </div>

        <div class="panel-body" id="choosePanel" style="min-height:100px;">
            <?php
            require("fields/strategy.php");
            require("fields/outputIndicators.php");
            require("fields/inputIndicators.php");
            require("fields/summary.php");
            ?>
        </div>
    </div>
</div>