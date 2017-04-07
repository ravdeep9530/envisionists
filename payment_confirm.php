<?php  session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<title>Confirm Your Order</title>

<script type="text/javascript" language="JavaScript">
<!-- 

// -->
</script>

<style type="text/css">
/***********************/
/***  Page Defaults  ***/
/***********************/
body {
  color: #[-- STORE.SC_TextColor --];
  background-color:#FAFAFA;
}

/***********************/
/***  Hyperlinks     ***/
/***********************/
a:link { 
  color: #[-- STORE.SC_LinkColor --];
}
a:visited { 
  color: #[-- STORE.SC_VisitedLinkColor --];
}
a:hover { 
  color: #[-- STORE.SC_LinkColor --];
}
a:active { 
  color: #[-- STORE.SC_ActiveLinkColor --];
}

/**********************************/
/***  Table of Products (Cart)  ***/
/**********************************/
table.cart {
  width: 100%;
  padding-top: 1em;
  border-collapse: separate;
  border-spacing: 3px;
}

th {
  text-align: center;
}

td.cart_quantity, td.cart_cp_quantity {
  padding: 3px;
  text-align: center; 
  background-color: #[-- STORE.SC_ShadeColor --];
}

td.cart_name, td.cart_cp_name {
  padding: 3px;
  text-align: left; 
  background-color: #[-- STORE.SC_ShadeColor --];
}

td.cart_sku, td.cart_cp_sku {
  padding: 3px;
  text-align: left; 
  background-color: #[-- STORE.SC_ShadeColor --];
}

td.cart_price, td.cart_cp_price {
  padding: 3px;
  font-style: italic;
  text-align: right; 
  background-color: #[-- STORE.SC_ShadeColor --];
}

td.cart_total, td.cart_cp_total {
  padding: 3px;
  text-align: right; 
  background-color: #[-- STORE.SC_ShadeColor --];
}

td.cart_op {
  padding: 3px;
  text-align: left; 
  background-color: #[-- STORE.SC_ShadeColor --];
}

td.cart_op1, td.cart_op2 {
  padding: 3px;
  background-color: #[-- STORE.SC_ShadeColor --];
}


/***************************************/
/***          Table of Totals        ***/
/***  Subtotal, Tax, Shipping, etc.  ***/
/***************************************/
table.totals {
  color: #[--STORE.SC_TextColor--];
  vertical-align: middle; 
  line-height: 150%;
}

td.totals_txt, td.totals_all_txt {
  text-align: right;
  padding-right: 15px;
}

td.totals, td.totals_all {
  text-align: right;
  padding-right: 3px;
}

td.totals_all, td.totals_all_txt {
  font-weight: bold;
}


/***********************/
/***  Address Table  ***/
/***********************/
table.addr { /* outer table that contains both billing and shipping addresses */
  color: #[-- STORE.SC_TextColor --];
}

table.bill_addr, table.ship_addr {   /* inner table for billing and shipping address */
  margin-left: 0px;
  margin-right: auto;
}

table.addr_name { /* table of registered name elements */
  margin-left: -4px;
  margin-right: auto;
}

td.bill_addr_hdr, td.ship_addr_hdr {
  font-weight: bold;
  text-align: left;
}

td.addr {
  text-align: right;
  padding-right: 5px;
}

td.addr_val {
  text-align: left;
}

td.addr_foot {    /* footnote about required fields */
  font: bold smaller Arial;
  text-align: center;
}

td.sql_addr {
  padding-right: 15px;
}

/***********************/
/***  Payment Table  ***/
/***********************/
table.payment{
  color: #[-- STORE.SC_TextColor --];
  margin-left: auto;
  margin-right: auto;
}

table.pay_holder {
  margin-left: auto;
  margin-right: auto;
}

td.payment_hdr {
  font-weight: bold;
  text-align: center;
}

td.paymentselection {
  text-align: center;
  padding-top: 20px;
}
td.payment {
  text-align: left;
}

td.payment_value {
  text-align: left;
}

td.sql_pay {
  padding-right: 15px;
}

/*************************************/
/***  Ordering Instructions Table  ***/
/*************************************/
table.instruct {
  padding-bottom: .5em;
}

td.instruct_hdr {
  font-weight: bold;
  text-align: center
}

/**********************************/
/***  Comments/More Info Table  ***/
/**********************************/
table.comm {
  padding-bottom: .5em;
}

td.comm_hdr {
  font-weight: bold;
  text-align: center
}

table.CustomHTML {
  text-align: center;
  padding-bottom: .5em;
}

td.email {
  text-align: center;
  padding-bottom: .5em;
}

</style>

</head>

<body>

<table id="backgroundTable" style="margin: 0; padding: 0; background-color: #fafafa; height: 100%; width: 100%;" width="100%" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="border-collapse: collapse;" align="center" valign="top">
<table id="templatePreheader" style="background-color: #fafafa;" width="600" border="0" cellspacing="0" cellpadding="10">
<tbody>
<tr>
<td class="preheaderContent" style="border-collapse: collapse;" valign="top">
<table width="100%" border="0" cellspacing="0" cellpadding="10">
<tbody>
<tr>
<td class="headerContent" style="border-collapse: collapse; color: #202020; font-family: Arial; font-size: 34px; font-weight: bold; line-height: 100%; padding: 0; text-align: center; vertical-align: middle;"><img id="headerImage campaign-icon" style="max-width: 300px; border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none;" alt="" src="images/logo.png" /></td>

</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table id="templateContainer"  style="border: 1px solid #DDDDDD; background-color: #ffffff;" width="600" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="border-collapse: collapse;" align="center" valign="top">
<table id="templateHeader" style="background-color: #ffffff; border-bottom: 0;" width="600" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>

</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td style="border-collapse: collapse;" align="center" valign="top">
<table id="templateBody" width="600" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="bodyContent" style="border-collapse: collapse; background-color: #ffffff;" valign="top">
<table width="100%" border="0" cellspacing="0" cellpadding="20">
<tbody>
<tr>
<td style="border-collapse: collapse;" valign="top">
<div style="color: #505050; font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;">
<h3 class="h1" style="text-align: center; color: #202020; display: block; font-family: Arial; font-size: 24px; font-weight: bold; line-height: 100%; margin-top: 0; margin-right: 0; margin-bottom: 10px; margin-left: 0;">Paid following amount to Buy Course Training.</h3> <?php
					include("connection.php");
$hex=$_GET['hex'];		
$id=$_GET['id'];
			$query="SELECT * FROM  people WHERE hex='$hex'";

$result=$connect->query($query);

while($row = $result->fetch_assoc())
{$name=$row["name"];
$email=$row["email"];
	}
	$query="SELECT * FROM  courses WHERE id=$id";
	$result=$connect->query($query);

while($row = $result->fetch_assoc())
{$cname=$row["name"];
$fee=$row["fee"];
$ctime=$row["duration"];
	}
	
	
	$gt=($fee/100)*15; ?>
    <hr/>
Dear <strong> <?php echo $name;?> </strong><br/>
Email:<strong><?php echo $email;?></strong><br/>
Course Name:<strong><?php echo $cname;?></strong><br/>
Course Duration:<strong><?php echo $ctime;?> Months</strong><br/>
<p>Thank you for Uses Our Services.</p>

<table border="0" width="0" align="right">
  <tr>
    <td align="right">
      
    </td>
  </tr>
  <tr>
    <td align="right"><br/>
   <b> Voucher Pack:</b>&nbsp;&nbsp;&nbsp; <?php echo $fee; ?>
   <br/>
   <b> Service Tax:</b>&nbsp;&nbsp;&nbsp; 0%
    </td>
  </tr>

  <tr><td align="center"><hr noshade size="2"></td></tr>

  <tr>
    <td align="right">
     <b> Grand Total:</b>&nbsp;&nbsp;&nbsp; <?php echo $fee;?>/-
    </td>
  </tr>

  <tr><td align="center"><hr noshade size="2"></td></tr>

  <tr>
    <td align="center">
    <b> Total Payable:</b>&nbsp;&nbsp;&nbsp; <?php echo $fee;?>/- Rupees Only
    </td>
  </tr>

  <tr><td align="center"><hr noshade size="2"></td></tr>

 
  <tr>
    <td align="center">
    
    </td>
  </tr>

  

  


  

</table>

</div></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td style="border-collapse: collapse;" align="center" valign="top">
<table id="templateFooter" style="background-color: #ffffff; border-top: 0;" width="600" border="0" cellspacing="0" cellpadding="10">
<tbody>
<tr>
<td class="footerContent" style="border-collapse: collapse;" valign="top">
<table width="100%" border="0" cellspacing="0" cellpadding="10">
<tbody>
<tr>
<td id="social" style="border-collapse: collapse; background-color: #fafafa; border: 0;" colspan="2" valign="middle">
<div style="color: #707070; font-family: Arial; font-size: 12px; line-height: 125%; text-align: center;"><button style="background-color:#9C3; color:#FFF; width:100%; padding:2%;" onClick="location.href='instamojo/index.php?rate=<?php echo $fee;?>&name=<?php echo $name;?>&email=<?php echo $email;?>&hex=<?php echo $hex;?>&id=<?php echo $id; ?>'">Pay Now</button></div></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>


</body>
</html>

