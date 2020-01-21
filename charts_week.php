<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">층간소음 측정 데이터</a>

    
    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">

         <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>일간 데이터</span>
        </a>
      </li>
      
      <li class="nav-item">
        <li class="nav-item active">

        <a class="nav-link" href="charts_week.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>주간 데이터</span></a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="charts_month.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>월간 데이터</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">


        <!-- Icon Cards-->
        <div class="row">
       
        </div>


    
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
      <!--  <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>-->
        <!-- Include fusioncharts core library -->
  <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
	<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>
	<script type="text/javascript">
		FusionCharts.ready(function(){
			var chartObj = new FusionCharts({
    type: 'zoomline',
    renderAt: 'chart-container',
    width: '1400',
    height: '500',
    dataFormat: 'json',
    dataSource: {
        "chart": {
            "caption": "Unique Website Visitors",
            "subcaption": "Last year",
            "yaxisname": "Unique Visitors",
            "xaxisname": "Date",
            "yaxisminValue": "800",
            "yaxismaxValue": "1400",
            "pixelsPerPoint": "0",
            "pixelsPerLabel": "30",
            "lineThickness": "1",
            "compactdatamode": "1",
            "dataseparator": "|",
            "labelHeight": "30",
            "theme": "fusion"
        },
        "categories": [{
            "category": "Jan 01|Jan 02|Jan 03|Jan 04|Jan 05|Jan 06|Jan 07|Jan 08|Jan 09|Jan 10|Jan 11|Jan 12|Jan 13|Jan 14|Jan 15|Jan 16|Jan 17|Jan 18|Jan 19|Jan 20|Jan 21|Jan 22|Jan 23|Jan 24|Jan 25|Jan 26|Jan 27|Jan 28|Jan 29|Jan 30|Jan 31|Feb 01|Feb 02|Feb 03|Feb 04|Feb 05|Feb 06|Feb 07|Feb 08|Feb 09|Feb 10|Feb 11|Feb 12|Feb 13|Feb 14|Feb 15|Feb 16|Feb 17|Feb 18|Feb 19|Feb 20|Feb 21|Feb 22|Feb 23|Feb 24|Feb 25|Feb 26|Feb 27|Feb 28|Mar 01|Mar 02|Mar 03|Mar 04|Mar 05|Mar 06|Mar 07|Mar 08|Mar 09|Mar 10|Mar 11|Mar 12|Mar 13|Mar 14|Mar 15|Mar 16|Mar 17|Mar 18|Mar 19|Mar 20|Mar 21|Mar 22|Mar 23|Mar 24|Mar 25|Mar 26|Mar 27|Mar 28|Mar 29|Mar 30|Mar 31|Apr 01|Apr 02|Apr 03|Apr 04|Apr 05|Apr 06|Apr 07|Apr 08|Apr 09|Apr 10|Apr 11|Apr 12|Apr 13|Apr 14|Apr 15|Apr 16|Apr 17|Apr 18|Apr 19|Apr 20|Apr 21|Apr 22|Apr 23|Apr 24|Apr 25|Apr 26|Apr 27|Apr 28|Apr 29|Apr 30|May 01|May 02|May 03|May 04|May 05|May 06|May 07|May 08|May 09|May 10|May 11|May 12|May 13|May 14|May 15|May 16|May 17|May 18|May 19|May 20|May 21|May 22|May 23|May 24|May 25|May 26|May 27|May 28|May 29|May 30|May 31|Jun 01|Jun 02|Jun 03|Jun 04|Jun 05|Jun 06|Jun 07|Jun 08|Jun 09|Jun 10|Jun 11|Jun 12|Jun 13|Jun 14|Jun 15|Jun 16|Jun 17|Jun 18|Jun 19|Jun 20|Jun 21|Jun 22|Jun 23|Jun 24|Jun 25|Jun 26|Jun 27|Jun 28|Jun 29|Jun 30|Jul 01|Jul 02|Jul 03|Jul 04|Jul 05|Jul 06|Jul 07|Jul 08|Jul 09|Jul 10|Jul 11|Jul 12|Jul 13|Jul 14|Jul 15|Jul 16|Jul 17|Jul 18|Jul 19|Jul 20|Jul 21|Jul 22|Jul 23|Jul 24|Jul 25|Jul 26|Jul 27|Jul 28|Jul 29|Jul 30|Jul 31|Aug 01|Aug 02|Aug 03|Aug 04|Aug 05|Aug 06|Aug 07|Aug 08|Aug 09|Aug 10|Aug 11|Aug 12|Aug 13|Aug 14|Aug 15|Aug 16|Aug 17|Aug 18|Aug 19|Aug 20|Aug 21|Aug 22|Aug 23|Aug 24|Aug 25|Aug 26|Aug 27|Aug 28|Aug 29|Aug 30|Aug 31|Sep 01|Sep 02|Sep 03|Sep 04|Sep 05|Sep 06|Sep 07|Sep 08|Sep 09|Sep 10|Sep 11|Sep 12|Sep 13|Sep 14|Sep 15|Sep 16|Sep 17|Sep 18|Sep 19|Sep 20|Sep 21|Sep 22|Sep 23|Sep 24|Sep 25|Sep 26|Sep 27|Sep 28|Sep 29|Sep 30|Oct 01|Oct 02|Oct 03|Oct 04|Oct 05|Oct 06|Oct 07|Oct 08|Oct 09|Oct 10|Oct 11|Oct 12|Oct 13|Oct 14|Oct 15|Oct 16|Oct 17|Oct 18|Oct 19|Oct 20|Oct 21|Oct 22|Oct 23|Oct 24|Oct 25|Oct 26|Oct 27|Oct 28|Oct 29|Oct 30|Oct 31|Nov 01|Nov 02|Nov 03|Nov 04|Nov 05|Nov 06|Nov 07|Nov 08|Nov 09|Nov 10|Nov 11|Nov 12|Nov 13|Nov 14|Nov 15|Nov 16|Nov 17|Nov 18|Nov 19|Nov 20|Nov 21|Nov 22|Nov 23|Nov 24|Nov 25|Nov 26|Nov 27|Nov 28|Nov 29|Nov 30|Dec 01|Dec 02|Dec 03|Dec 04|Dec 05|Dec 06|Dec 07|Dec 08|Dec 09|Dec 10|Dec 11|Dec 12|Dec 13|Dec 14|Dec 15|Dec 16|Dec 17|Dec 18|Dec 19|Dec 20|Dec 21|Dec 22|Dec 23|Dec 24|Dec 25|Dec 26|Dec 27|Dec 28|Dec 29|Dec 30|Dec 31"
        }],
        "dataset": [{
            "seriesname": "harrysfoodmart.com",
            "data": "978|976|955|981|992|964|973|949|985|962|977|955|988|959|985|965|991|985|966|989|960|944|976|980|940|941|945|952|973|946|951|983|942|964|937|942|963|971|969|967|934|935|956|974|930|936|935|973|979|990|994|992|994|984|991|986|963|985|1006|965|958|976|993|974|995|989|966|965|1011|995|1007|978|985|1012|997|985|1004|987|986|981|991|982|992|983|1018|994|976|989|1022|989|1002|983|1015|1006|1005|1003|1017|1014|995|1007|1001|1019|1012|1005|1027|1011|1013|1035|1010|1011|1011|1036|1041|1005|1005|997|1012|1032|1025|1020|998|1018|1000|1009|1005|1004|1042|1047|1021|1032|1019|1038|1050|1037|1019|1018|1035|1055|1028|1049|1013|1028|1023|1054|1041|1051|1069|1051|1072|1049|1054|1035|1072|1042|1048|1083|1054|1048|1065|1046|1055|1056|1085|1046|1048|1048|1068|1089|1074|1078|1046|1052|1082|1052|1067|1058|1051|1052|1082|1060|1076|1077|1059|1070|1082|1093|1100|1089|1079|1075|1087|1089|1088|1106|1107|1067|1076|1101|1094|1078|1097|1094|1083|1066|1079|1111|1100|1085|1091|1095|1081|1091|1077|1095|1107|1083|1116|1118|1101|1111|1096|1077|1086|1117|1087|1105|1107|1094|1112|1101|1084|1094|1125|1099|1108|1084|1099|1120|1122|1092|1120|1121|1094|1114|1099|1129|1095|1125|1127|1121|1129|1110|1097|1136|1110|1098|1131|1125|1144|1104|1117|1105|1105|1145|1102|1143|1115|1147|1149|1129|1108|1109|1130|1153|1121|1127|1133|1120|1155|1120|1147|1118|1117|1145|1152|1145|1130|1157|1135|1115|1156|1163|1131|1123|1137|1151|1160|1152|1166|1144|1137|1124|1151|1129|1133|1143|1139|1171|1135|1132|1174|1170|1163|1175|1152|1142|1160|1148|1173|1158|1160|1151|1142|1168|1153|1143|1157|1142|1172|1186|1176|1185|1175|1178|1184|1166|1148|1166|1186|1187|1180|1179|1161|1174|1155|1172|1173|1179|1149|1170|1175|1162|1151|1152|1163|1155|1197|1174|1199|1180|1160|1174|1159|1168|1160"

        }, {
            "seriesname": "harrysfashion.com",
            "data": "1053|1057|1084|1082|1098|1055|1068|1067|1074|1056|1067|1078|1079|1084|1041|1052|1066|1080|1049|1051|1049|1044|1083|1053|1038|1077|1046|1067|1053|1033|1047|1055|1031|1074|1031|1041|1071|1057|1035|1070|1050|1069|1054|1049|1022|1044|1049|1058|1064|1088|1093|1103|1085|1072|1104|1106|1078|1061|1078|1105|1105|1062|1076|1074|1114|1069|1091|1086|1094|1072|1079|1088|1082|1075|1110|1120|1108|1102|1090|1088|1092|1102|1110|1111|1085|1113|1110|1116|1095|1105|1105|1122|1133|1132|1093|1097|1120|1105|1135|1106|1108|1135|1098|1136|1122|1113|1113|1145|1103|1127|1104|1126|1147|1120|1119|1120|1132|1107|1149|1147|1149|1141|1145|1152|1117|1144|1157|1134|1157|1120|1125|1153|1141|1132|1158|1134|1166|1167|1170|1163|1139|1171|1145|1156|1158|1154|1196|1196|1169|1174|1174|1195|1161|1201|1208|1188|1182|1188|1162|1174|1174|1211|1189|1211|1172|1211|1179|1199|1216|1184|1209|1181|1186|1174|1185|1220|1206|1190|1206|1201|1190|1209|1208|1189|1195|1188|1193|1206|1214|1205|1215|1200|1194|1210|1205|1236|1226|1208|1228|1235|1197|1197|1198|1224|1220|1210|1226|1244|1228|1241|1237|1201|1208|1238|1213|1222|1213|1249|1222|1221|1230|1223|1214|1251|1234|1220|1240|1213|1252|1224|1222|1234|1262|1255|1225|1226|1242|1240|1250|1265|1235|1228|1261|1221|1230|1235|1260|1273|1253|1268|1258|1233|1258|1248|1230|1270|1246|1242|1246|1253|1253|1257|1253|1266|1248|1247|1257|1245|1281|1271|1272|1248|1292|1251|1253|1257|1259|1288|1252|1297|1290|1268|1291|1258|1263|1254|1302|1279|1272|1271|1281|1261|1263|1289|1294|1272|1296|1264|1282|1268|1296|1280|1281|1277|1277|1292|1266|1310|1288|1312|1308|1300|1289|1273|1282|1300|1322|1301|1314|1296|1305|1305|1327|1323|1295|1314|1298|1312|1330|1293|1309|1286|1309|1332|1300|1295|1325|1322|1305|1323|1300|1308|1299|1324|1338|1313|1329|1331|1299|1329|1344|1335|1342|1307|1314|1326|1331|1328|1328|1311|1352|1328|1309|1311|1312"
        }]
    }
}
);
			chartObj.render();
		});
  </script>
 
  <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
	<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>
	<script type="text/javascript">
		FusionCharts.ready(function(){
			var chartObj = new FusionCharts({
    type: 'zoomlinedy',
    renderAt: 'chart-container',
    width: '680',
    height: '390',
    dataFormat: 'json',
    dataSource: {
        "chart": {
            "caption": "Harry's Supermart - Sales Analysis",
            "subcaption": "Previous calendar year",
            "pYAxisName": "Unique footfall",
            "sYAxisName": "Sales",
            "compactDataMode": "1",
            "pixelsPerPoint": "0",
            "lineThickness": "1",
            "dataSeparator": "|",
            "snumberPrefix": "$",
            "pYAxisMaxValue": "1500",
            "pYAxisMinValue": "900",
            "sYAxisMaxValue": "23000",
            "sYAxisMinValue": "15000",
            "theme": "fusion"
        },
        "categories": [{
            "category": "Jan 01|Jan 02|Jan 03|Jan 04|Jan 05|Jan 06|Jan 07|Jan 08|Jan 09|Jan 10|Jan 11|Jan 12|Jan 13|Jan 14|Jan 15|Jan 16|Jan 17|Jan 18|Jan 19|Jan 20|Jan 21|Jan 22|Jan 23|Jan 24|Jan 25|Jan 26|Jan 27|Jan 28|Jan 29|Jan 30|Jan 31|Feb 01|Feb 02|Feb 03|Feb 04|Feb 05|Feb 06|Feb 07|Feb 08|Feb 09|Feb 10|Feb 11|Feb 12|Feb 13|Feb 14|Feb 15|Feb 16|Feb 17|Feb 18|Feb 19|Feb 20|Feb 21|Feb 22|Feb 23|Feb 24|Feb 25|Feb 26|Feb 27|Feb 28|Mar 01|Mar 02|Mar 03|Mar 04|Mar 05|Mar 06|Mar 07|Mar 08|Mar 09|Mar 10|Mar 11|Mar 12|Mar 13|Mar 14|Mar 15|Mar 16|Mar 17|Mar 18|Mar 19|Mar 20|Mar 21|Mar 22|Mar 23|Mar 24|Mar 25|Mar 26|Mar 27|Mar 28|Mar 29|Mar 30|Mar 31|Apr 01|Apr 02|Apr 03|Apr 04|Apr 05|Apr 06|Apr 07|Apr 08|Apr 09|Apr 10|Apr 11|Apr 12|Apr 13|Apr 14|Apr 15|Apr 16|Apr 17|Apr 18|Apr 19|Apr 20|Apr 21|Apr 22|Apr 23|Apr 24|Apr 25|Apr 26|Apr 27|Apr 28|Apr 29|Apr 30|May 01|May 02|May 03|May 04|May 05|May 06|May 07|May 08|May 09|May 10|May 11|May 12|May 13|May 14|May 15|May 16|May 17|May 18|May 19|May 20|May 21|May 22|May 23|May 24|May 25|May 26|May 27|May 28|May 29|May 30|May 31|Jun 01|Jun 02|Jun 03|Jun 04|Jun 05|Jun 06|Jun 07|Jun 08|Jun 09|Jun 10|Jun 11|Jun 12|Jun 13|Jun 14|Jun 15|Jun 16|Jun 17|Jun 18|Jun 19|Jun 20|Jun 21|Jun 22|Jun 23|Jun 24|Jun 25|Jun 26|Jun 27|Jun 28|Jun 29|Jun 30|Jul 01|Jul 02|Jul 03|Jul 04|Jul 05|Jul 06|Jul 07|Jul 08|Jul 09|Jul 10|Jul 11|Jul 12|Jul 13|Jul 14|Jul 15|Jul 16|Jul 17|Jul 18|Jul 19|Jul 20|Jul 21|Jul 22|Jul 23|Jul 24|Jul 25|Jul 26|Jul 27|Jul 28|Jul 29|Jul 30|Jul 31|Aug 01|Aug 02|Aug 03|Aug 04|Aug 05|Aug 06|Aug 07|Aug 08|Aug 09|Aug 10|Aug 11|Aug 12|Aug 13|Aug 14|Aug 15|Aug 16|Aug 17|Aug 18|Aug 19|Aug 20|Aug 21|Aug 22|Aug 23|Aug 24|Aug 25|Aug 26|Aug 27|Aug 28|Aug 29|Aug 30|Aug 31|Sep 01|Sep 02|Sep 03|Sep 04|Sep 05|Sep 06|Sep 07|Sep 08|Sep 09|Sep 10|Sep 11|Sep 12|Sep 13|Sep 14|Sep 15|Sep 16|Sep 17|Sep 18|Sep 19|Sep 20|Sep 21|Sep 22|Sep 23|Sep 24|Sep 25|Sep 26|Sep 27|Sep 28|Sep 29|Sep 30|Oct 01|Oct 02|Oct 03|Oct 04|Oct 05|Oct 06|Oct 07|Oct 08|Oct 09|Oct 10|Oct 11|Oct 12|Oct 13|Oct 14|Oct 15|Oct 16|Oct 17|Oct 18|Oct 19|Oct 20|Oct 21|Oct 22|Oct 23|Oct 24|Oct 25|Oct 26|Oct 27|Oct 28|Oct 29|Oct 30|Oct 31|Nov 01|Nov 02|Nov 03|Nov 04|Nov 05|Nov 06|Nov 07|Nov 08|Nov 09|Nov 10|Nov 11|Nov 12|Nov 13|Nov 14|Nov 15|Nov 16|Nov 17|Nov 18|Nov 19|Nov 20|Nov 21|Nov 22|Nov 23|Nov 24|Nov 25|Nov 26|Nov 27|Nov 28|Nov 29|Nov 30|Dec 01|Dec 02|Dec 03|Dec 04|Dec 05|Dec 06|Dec 07|Dec 08|Dec 09|Dec 10|Dec 11|Dec 12|Dec 13|Dec 14|Dec 15|Dec 16|Dec 17|Dec 18|Dec 19|Dec 20|Dec 21|Dec 22|Dec 23|Dec 24|Dec 25|Dec 26|Dec 27|Dec 28|Dec 29|Dec 30|Dec 31"
        }],
        "dataset": [{
            "seriesname": "Unique Footfall",
            "data": "1140|1160|1167|1145|1140|1132|1127|1137|1172|1181|1142|1134|1117|1147|1141|1149|1150|1113|1119|1110|1092|1102|1128|1131|1083|1081|1087|1088|1092|1109|1112|1065|1063|1057|1045|1043|1078|1083|1043|1039|1036|1031|1048|1056|1074|1045|1037|1034|1039|1031|1045|1048|1031|1019|1026|1017|1011|1022|1027|1022|1017|1019|1010|1015|1023|1029|1020|1009|1012|1008|1015|1027|1033|1008|1007|1009|1010|1013|1017|1024|1012|1009|1007|1009|1011|1015|1020|1004|1009|1011|1028|1037|1049|1057|1045|1047|1056|1068|1077|1089|1100|1090|1086|1094|1098|1101|1125|1131|1111|1102|1109|1099|1094|1112|1121|1102|1094|1087|1089|1097|1139|1148|1131|1127|1129|1122|1137|1158|1174|1145|1143|1137|1139|1147|1156|1162|1134|1127|1130|1123|1117|1137|1138|1117|1109|1107|1100|1107|1120|1122|1120|1112|1100|1094|1090|1100|1102|1052|1054|1044|1047|1063|1077|1080|1050|1047|1030|1022|1021|1022|1025|1015|1009|1010|1007|1002|1010|1020|1000|994|990|987|990|1001|999|982|977|967|966|974|990|987|974|977|969|962|967|972|977|961|957|959|960|958|967|970|959|954|962|961|957|980|987|977|976|979|982|983|1000|1009|994|999|1002|1009|1015|1024|1029|1020|1011|1009|1015|1010|1025|1031|1019|1018|1022|1014|1018|1022|1025|1010|1022|1017|1019|1010|1015|1023|1029|1020|1009|1012|1008|1015|1027|1033|1008|1007|1009|1010|1013|1017|1024|1012|1009|1007|1009|1011|1015|1020|1004|1009|1045|1043|1078|1083|1043|1039|1036|1031|1048|1056|1074|1045|1037|1034|1039|1031|1045|1048|1031|1019|1026|1017|1011|1022|1027|1022|1020|1023|1024|1025|1040|1057|1035|1033|1037|1047|1049|1068|1074|1052|1059|1064|1060|1064|1080|1089|1080|1081|1079|1086|1084|1090|1099|1090|1091|1088|1084|1082|1089|1100|1094|1127|1129|1122|1137|1158|1174|1145|1143|1137|1139|1147|1156|1162|1134|1127|1130|1123|1117|1137|1138|1117|1109|1107|1100|1107|1137|1140|1120|1127|1130|1131"
        },  {
            "seriesname": "Sales",
            "parentYAxis": "S",
            "data": "21270|21290|21220|21370|21580|21740|21450|21430|21370|21390|21470|21560|21620|21340|21270|21300|21230|21170|21370|21380|22170|21090|21070|21000|21070|21370|21400|21200|21270|21300|21310|21400|21600|21670|21450|21400|21320|21270|21370|21720|21810|21420|21340|21170|21470|21410|21490|21500|21130|21190|21100|20920|21020|21280|21310|20830|20810|20870|20880|20450|20430|20780|20830|20430|20390|20360|20310|20480|20560|20740|20450|20370|20340|20390|20310|20450|20480|20310|20190|20260|20170|20110|20220|20270|20220|20200|20230|20240|20250|20400|20720|20670|20690|20600|20650|20730|20790|20700|20590|20620|20580|20650|20770|20830|20580|20570|20590|20600|20630|20670|20740|20620|20590|20570|20590|20610|20650|20700|20540|20590|21150|20530|21070|20950|20930|20980|21330|20930|20890|20860|20810|20790|21060|21240|20950|20870|20840|20890|20810|20950|20980|20810|20690|20760|20670|20610|20720|20770|20700|20720|20800|20400|20370|20400|20510|20490|20320|20270|20170|20160|20240|19900|19870|19740|19770|19690|19620|19670|19720|19770|19610|19570|19590|19600|19580|19670|19700|19590|19540|19620|19610|19570|19800|19870|19770|19760|19790|19820|19830|20000|20090|19940|19990|20020|20090|20150|20240|20290|20200|20110|20090|20150|20100|20250|20310|20190|20180|20220|20140|20180|20220|20250|20100|21120|21000|20940|20900|21000|21020|20520|20540|20440|20470|20630|20770|20800|20500|20470|20300|20220|20210|20220|20250|20150|20090|20100|20070|20020|20100|20200|20000|19940|20220|20170|20190|20100|20150|20230|20290|20200|20090|20120|20080|20150|20270|20330|20080|20070|20090|20100|20130|20170|20240|20120|20090|20070|20090|20110|20150|20200|20040|20090|20110|20280|20370|20490|20570|20450|20470|20560|20680|20770|20890|21000|20900|20860|20940|20980|21010|21250|21310|21110|21020|21090|20990|20940|21120|21210|21020|20940|20870|20890|20970|20570|20350|20330|20370|20470|20490|20680|20740|20520|20590|20640|20600|20640|20800|20890|20800|20810|20790|20860|20840|20900|20990|20900|20910|20880|20840|20820|20890|21000|20940|21390|21480|21310|21270|21290|21220|21370|21580|21740|21450|21430|21370|21390|21470|21560|21620|21340|21270|21300|21230|21170|21370|21380|21170|21090|21070|21000|21070|21200|21220|21200"
        }]
    }
});
			chartObj.render();
		});
	</script>
	
<body>
    <div id="chart-container">FusionCharts XT will load here!</div>
</body>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                  </tr>
                  <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td>$170,750</td>
                  </tr>
                  <tr>
                    <td>Ashton Cox</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>66</td>
                    <td>2009/01/12</td>
                    <td>$86,000</td>
                  </tr>
                  <tr>
                    <td>Cedric Kelly</td>
                    <td>Senior Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2012/03/29</td>
                    <td>$433,060</td>
                  </tr>
                  <tr>
                    <td>Airi Satou</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>33</td>
                    <td>2008/11/28</td>
                    <td>$162,700</td>
                  </tr>
                  <tr>
                    <td>Brielle Williamson</td>
                    <td>Integration Specialist</td>
                    <td>New York</td>
                    <td>61</td>
                    <td>2012/12/02</td>
                    <td>$372,000</td>
                  </tr>
                  <tr>
                    <td>Herrod Chandler</td>
                    <td>Sales Assistant</td>
                    <td>San Francisco</td>
                    <td>59</td>
                    <td>2012/08/06</td>
                    <td>$137,500</td>
                  </tr>
                  <tr>
                    <td>Rhona Davidson</td>
                    <td>Integration Specialist</td>
                    <td>Tokyo</td>
                    <td>55</td>
                    <td>2010/10/14</td>
                    <td>$327,900</td>
                  </tr>
                  <tr>
                    <td>Colleen Hurst</td>
                    <td>Javascript Developer</td>
                    <td>San Francisco</td>
                    <td>39</td>
                    <td>2009/09/15</td>
                    <td>$205,500</td>
                  </tr>
                  <tr>
                    <td>Sonya Frost</td>
                    <td>Software Engineer</td>
                    <td>Edinburgh</td>
                    <td>23</td>
                    <td>2008/12/13</td>
                    <td>$103,600</td>
                  </tr>
                  <tr>
                    <td>Jena Gaines</td>
                    <td>Office Manager</td>
                    <td>London</td>
                    <td>30</td>
                    <td>2008/12/19</td>
                    <td>$90,560</td>
                  </tr>
                  <tr>
                    <td>Quinn Flynn</td>
                    <td>Support Lead</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2013/03/03</td>
                    <td>$342,000</td>
                  </tr>
                  <tr>
                    <td>Charde Marshall</td>
                    <td>Regional Director</td>
                    <td>San Francisco</td>
                    <td>36</td>
                    <td>2008/10/16</td>
                    <td>$470,600</td>
                  </tr>
                  <tr>
                    <td>Haley Kennedy</td>
                    <td>Senior Marketing Designer</td>
                    <td>London</td>
                    <td>43</td>
                    <td>2012/12/18</td>
                    <td>$313,500</td>
                  </tr>
                  <tr>
                    <td>Tatyana Fitzpatrick</td>
                    <td>Regional Director</td>
                    <td>London</td>
                    <td>19</td>
                    <td>2010/03/17</td>
                    <td>$385,750</td>
                  </tr>
                  <tr>
                    <td>Michael Silva</td>
                    <td>Marketing Designer</td>
                    <td>London</td>
                    <td>66</td>
                    <td>2012/11/27</td>
                    <td>$198,500</td>
                  </tr>
                  <tr>
                    <td>Paul Byrd</td>
                    <td>Chief Financial Officer (CFO)</td>
                    <td>New York</td>
                    <td>64</td>
                    <td>2010/06/09</td>
                    <td>$725,000</td>
                  </tr>
                  <tr>
                    <td>Gloria Little</td>
                    <td>Systems Administrator</td>
                    <td>New York</td>
                    <td>59</td>
                    <td>2009/04/10</td>
                    <td>$237,500</td>
                  </tr>
                  <tr>
                    <td>Bradley Greer</td>
                    <td>Software Engineer</td>
                    <td>London</td>
                    <td>41</td>
                    <td>2012/10/13</td>
                    <td>$132,000</td>
                  </tr>
                  <tr>
                    <td>Dai Rios</td>
                    <td>Personnel Lead</td>
                    <td>Edinburgh</td>
                    <td>35</td>
                    <td>2012/09/26</td>
                    <td>$217,500</td>
                  </tr>
                  <tr>
                    <td>Jenette Caldwell</td>
                    <td>Development Lead</td>
                    <td>New York</td>
                    <td>30</td>
                    <td>2011/09/03</td>
                    <td>$345,000</td>
                  </tr>
                  <tr>
                    <td>Yuri Berry</td>
                    <td>Chief Marketing Officer (CMO)</td>
                    <td>New York</td>
                    <td>40</td>
                    <td>2009/06/25</td>
                    <td>$675,000</td>
                  </tr>
                  <tr>
                    <td>Caesar Vance</td>
                    <td>Pre-Sales Support</td>
                    <td>New York</td>
                    <td>21</td>
                    <td>2011/12/12</td>
                    <td>$106,450</td>
                  </tr>
                  <tr>
                    <td>Doris Wilder</td>
                    <td>Sales Assistant</td>
                    <td>Sidney</td>
                    <td>23</td>
                    <td>2010/09/20</td>
                    <td>$85,600</td>
                  </tr>
                  <tr>
                    <td>Angelica Ramos</td>
                    <td>Chief Executive Officer (CEO)</td>
                    <td>London</td>
                    <td>47</td>
                    <td>2009/10/09</td>
                    <td>$1,200,000</td>
                  </tr>
                  <tr>
                    <td>Gavin Joyce</td>
                    <td>Developer</td>
                    <td>Edinburgh</td>
                    <td>42</td>
                    <td>2010/12/22</td>
                    <td>$92,575</td>
                  </tr>
                  <tr>
                    <td>Jennifer Chang</td>
                    <td>Regional Director</td>
                    <td>Singapore</td>
                    <td>28</td>
                    <td>2010/11/14</td>
                    <td>$357,650</td>
                  </tr>
                  <tr>
                    <td>Brenden Wagner</td>
                    <td>Software Engineer</td>
                    <td>San Francisco</td>
                    <td>28</td>
                    <td>2011/06/07</td>
                    <td>$206,850</td>
                  </tr>
                  <tr>
                    <td>Fiona Green</td>
                    <td>Chief Operating Officer (COO)</td>
                    <td>San Francisco</td>
                    <td>48</td>
                    <td>2010/03/11</td>
                    <td>$850,000</td>
                  </tr>
                  <tr>
                    <td>Shou Itou</td>
                    <td>Regional Marketing</td>
                    <td>Tokyo</td>
                    <td>20</td>
                    <td>2011/08/14</td>
                    <td>$163,000</td>
                  </tr>
                  <tr>
                    <td>Michelle House</td>
                    <td>Integration Specialist</td>
                    <td>Sidney</td>
                    <td>37</td>
                    <td>2011/06/02</td>
                    <td>$95,400</td>
                  </tr>
                  <tr>
                    <td>Suki Burks</td>
                    <td>Developer</td>
                    <td>London</td>
                    <td>53</td>
                    <td>2009/10/22</td>
                    <td>$114,500</td>
                  </tr>
                  <tr>
                    <td>Prescott Bartlett</td>
                    <td>Technical Author</td>
                    <td>London</td>
                    <td>27</td>
                    <td>2011/05/07</td>
                    <td>$145,000</td>
                  </tr>
                  <tr>
                    <td>Gavin Cortez</td>
                    <td>Team Leader</td>
                    <td>San Francisco</td>
                    <td>22</td>
                    <td>2008/10/26</td>
                    <td>$235,500</td>
                  </tr>
                  <tr>
                    <td>Martena Mccray</td>
                    <td>Post-Sales support</td>
                    <td>Edinburgh</td>
                    <td>46</td>
                    <td>2011/03/09</td>
                    <td>$324,050</td>
                  </tr>
                  <tr>
                    <td>Unity Butler</td>
                    <td>Marketing Designer</td>
                    <td>San Francisco</td>
                    <td>47</td>
                    <td>2009/12/09</td>
                    <td>$85,675</td>
                  </tr>
                  <tr>
                    <td>Howard Hatfield</td>
                    <td>Office Manager</td>
                    <td>San Francisco</td>
                    <td>51</td>
                    <td>2008/12/16</td>
                    <td>$164,500</td>
                  </tr>
                  <tr>
                    <td>Hope Fuentes</td>
                    <td>Secretary</td>
                    <td>San Francisco</td>
                    <td>41</td>
                    <td>2010/02/12</td>
                    <td>$109,850</td>
                  </tr>
                  <tr>
                    <td>Vivian Harrell</td>
                    <td>Financial Controller</td>
                    <td>San Francisco</td>
                    <td>62</td>
                    <td>2009/02/14</td>
                    <td>$452,500</td>
                  </tr>
                  <tr>
                    <td>Timothy Mooney</td>
                    <td>Office Manager</td>
                    <td>London</td>
                    <td>37</td>
                    <td>2008/12/11</td>
                    <td>$136,200</td>
                  </tr>
                  <tr>
                    <td>Jackson Bradshaw</td>
                    <td>Director</td>
                    <td>New York</td>
                    <td>65</td>
                    <td>2008/09/26</td>
                    <td>$645,750</td>
                  </tr>
                  <tr>
                    <td>Olivia Liang</td>
                    <td>Support Engineer</td>
                    <td>Singapore</td>
                    <td>64</td>
                    <td>2011/02/03</td>
                    <td>$234,500</td>
                  </tr>
                  <tr>
                    <td>Bruno Nash</td>
                    <td>Software Engineer</td>
                    <td>London</td>
                    <td>38</td>
                    <td>2011/05/03</td>
                    <td>$163,500</td>
                  </tr>
                  <tr>
                    <td>Sakura Yamamoto</td>
                    <td>Support Engineer</td>
                    <td>Tokyo</td>
                    <td>37</td>
                    <td>2009/08/19</td>
                    <td>$139,575</td>
                  </tr>
                  <tr>
                    <td>Thor Walton</td>
                    <td>Developer</td>
                    <td>New York</td>
                    <td>61</td>
                    <td>2013/08/11</td>
                    <td>$98,540</td>
                  </tr>
                  <tr>
                    <td>Finn Camacho</td>
                    <td>Support Engineer</td>
                    <td>San Francisco</td>
                    <td>47</td>
                    <td>2009/07/07</td>
                    <td>$87,500</td>
                  </tr>
                  <tr>
                    <td>Serge Baldwin</td>
                    <td>Data Coordinator</td>
                    <td>Singapore</td>
                    <td>64</td>
                    <td>2012/04/09</td>
                    <td>$138,575</td>
                  </tr>
                  <tr>
                    <td>Zenaida Frank</td>
                    <td>Software Engineer</td>
                    <td>New York</td>
                    <td>63</td>
                    <td>2010/01/04</td>
                    <td>$125,250</td>
                  </tr>
                  <tr>
                    <td>Zorita Serrano</td>
                    <td>Software Engineer</td>
                    <td>San Francisco</td>
                    <td>56</td>
                    <td>2012/06/01</td>
                    <td>$115,000</td>
                  </tr>
                  <tr>
                    <td>Jennifer Acosta</td>
                    <td>Junior Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>43</td>
                    <td>2013/02/01</td>
                    <td>$75,650</td>
                  </tr>
                  <tr>
                    <td>Cara Stevens</td>
                    <td>Sales Assistant</td>
                    <td>New York</td>
                    <td>46</td>
                    <td>2011/12/06</td>
                    <td>$145,600</td>
                  </tr>
                  <tr>
                    <td>Hermione Butler</td>
                    <td>Regional Director</td>
                    <td>London</td>
                    <td>47</td>
                    <td>2011/03/21</td>
                    <td>$356,250</td>
                  </tr>
                  <tr>
                    <td>Lael Greer</td>
                    <td>Systems Administrator</td>
                    <td>London</td>
                    <td>21</td>
                    <td>2009/02/27</td>
                    <td>$103,500</td>
                  </tr>
                  <tr>
                    <td>Jonas Alexander</td>
                    <td>Developer</td>
                    <td>San Francisco</td>
                    <td>30</td>
                    <td>2010/07/14</td>
                    <td>$86,500</td>
                  </tr>
                  <tr>
                    <td>Shad Decker</td>
                    <td>Regional Director</td>
                    <td>Edinburgh</td>
                    <td>51</td>
                    <td>2008/11/13</td>
                    <td>$183,000</td>
                  </tr>
                  <tr>
                    <td>Michael Bruce</td>
                    <td>Javascript Developer</td>
                    <td>Singapore</td>
                    <td>29</td>
                    <td>2011/06/27</td>
                    <td>$183,000</td>
                  </tr>
                  <tr>
                    <td>Donna Snider</td>
                    <td>Customer Support</td>
                    <td>New York</td>
                    <td>27</td>
                    <td>2011/01/25</td>
                    <td>$112,000</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
