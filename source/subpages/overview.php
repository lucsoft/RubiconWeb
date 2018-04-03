
<script type="text/javascript">
AmCharts.makeChart("chartdiv",
{
"hideCredits":true,
"type": "serial",
"categoryField": "category",

"theme": "light",
"categoryAxis": {
  "gridPosition": "start",
  "startOnAxis": true
},
"trendLines": [],
"graphs": [
  {
     "fillAlphas": 0.7,
     "id": "AmGraph-1",
     "lineAlpha": 0,
     "valueField": "column-1"
  }
],
"legend": {
  "enabled": false
},
"dataProvider": [
  {
     "category": "NOV",
     "column-1": "20"
  },
  {
     "category": "DEZ",
     "column-1": "50"
  },
  {
     "category": "JAN",
     "column-1": "66"
  },
  {
     "category": "FEB",
     "column-1": "50"
  },
  {
     "category": "MRZ",
     "column-1": "80"
  },
  {
     "category": "APR",
     "column-1": "90"
  },
  {
     "category": "TODAY",
     "column-1": "92"
  }
]
}
);
</script>
<div class="panel-grid styleone">
  <div class="griditem">
     <span class="title">216</span>
     <span class="subtitle">MEMBERS</span>
  </div>
  <div class="griditem">
     <span class="title">+5</span>
     <span class="subtitle">MEMBERS <br>THIS MONTH</span>
  </div>
  <div class="griditem">
     <span class="title">+5</span>
     <span class="subtitle">MESSAGES <br>THIS MONTH </span>
  </div>
  <div class="griditem">
     <span class="title">#05</span>
     <span class="subtitle">Server Ranking </span>
  </div>
  <div class="griditem chart">
     <div id="chartdiv" style="width: 100%; height: 100%; " ></div>
  </div>
  <div class="griditem">
     <span class="title">DEU</span>
     <span class="subtitle">sprache</span>
  </div>
  <div class="griditem">
     <span class="title">Keine</span>
    <span class="subtitle">Warnungen</span>
 </div>
 <div class="griditem">
    <span class="title">Keine</span>
  <span class="subtitle">Aktiven Tickets</span>
 </div>
 <div class="griditem">
    <span class="icon material-icons">info_outline</span>
    <span class="title">LIFETIME</span>
  <span class="subtitle">Server-Premium</span>
 </div>

</div>
