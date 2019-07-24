<?php
	$role=$_SESSION['xs_user_role'];

	if($role=="Admin" || $role=="PM" || $role=="Arch")
	{	
	}
	else{ echo "<script>alert('You have no permission to access this module.');setTimeout(function(){history.go(-1);},50);</script>";return;
	}
?>


<style>
	input{width:200px;}
</style>
<br>
<h1>Build Book</h1>
 <form action="./buildbook_action.php" method="post">
 	<table border="0">
 		<tr><td>Status</td><td><input type="text" name="status" value=""></td></tr>
 		<tr><td>Submit for Build Date</td><td><input type="date" name="build_date" value=""></td></tr>
 		<tr><td>Submit for Build By</td><td><input type="text" name="build_by" value=""></td></tr>
 		<tr><td>AdvConfig.DateCompletion</td><td><input type="date" name="adv_config_date" value=""></td></tr>
 		<tr><td>AdvConfig.CompletedBy</td><td><input type="text" name="adv_config_by" value=""></td></tr>
 		<tr><td>Val.DateCompletion</td><td><input type="date" name="val_config_date" value=""></td></tr>
 		<tr><td>Val.CompletedBy</td><td><input type="text" name="val_config_by" value=""></td></tr>
 		<tr><td>Customer.Customer Name</td><td><input type="text" name="customer_name" value=""></td></tr>
 		<tr><td>Customer.Customer Sponsor</td><td><input type="text" name="customer_sponsor" value=""></td></tr>
 		<tr><td>Customer.Account Executive</td><td><input type="text" name="account_excutive" value=""></td></tr>
 		<tr><td>Program Manager</td><td><input type="text" name="program_manager" value=""></td></tr>
 		<tr><td>Project Manager</td><td><input type="text" name="project_manager" value=""></td></tr>
 		<tr><td>Partner(s)</td><td><input type="text" name="partner" value=""></td></tr>
 		<tr><td>Build Engineer</td><td><input type="text" name="build_engr" value=""></td></tr>
 		<tr><td>Validation Engineer</td><td><input type="text" name="validation_engr" value=""></td></tr>
 		<tr><td>Site</td><td><input type="text" name="site" value=""></td></tr>
 		<tr><td>Cluster Type</td><td><input type="text" name="cluster_type" value=""></td></tr>
 		<tr><td>Cluster Name</td><td><input type="text" name="cluster_name" value=""></td></tr>
 		<tr><td>Cluster Owner</td><td><input type="text" name="cluster_owner" value=""></td></tr>
 		<tr><td>Node Count</td><td><input type="text" name="node_count" value=""></td></tr>
 		<tr><td>Hardware Model</td><td><input type="text" name="hardware_model" value=""></td></tr>
 		<tr><td>IP Addresses</td><td><textarea name="ip_address" rows="3" cols="80"></textarea></td></tr>
 		<tr><td>Firewall Rules</td><td><select name="firewall_roles"><option value="yes">Yes</option><option value="no">No</option></select></td></tr>
 		<tr><td>Hypervisor Type</td><td><input type="text" name="hypervisor_type" value=""></td></tr>
 		<tr><td>vCenter Name</td><td><input type="text" name="v_center_name" value=""></td></tr>
 		<tr><td>NX Cluster IP Address</td><td><input type="text" name="nx_cluster_ip" value=""></td></tr>
 		<tr><td>NX License Version</td><td><input type="text" name="nx_license_ver" value=""></td></tr>
 		<tr><td>Cluster Redundancy Factor</td><td><input type="text" name="cluster_redun_factor" value=""></td></tr>
 		<tr><td>Storage Container Size</td><td><input type="text" name="storange_cont_size" value=""></td></tr>
 		<tr><td>Foundation Version</td><td><input type="text" name="foundation_version" value=""></td></tr>
 		<tr><td>AOS Version</td><td><input type="text" name="aos_version" value=""></td></tr>
 		<tr><td>NCC Version</td><td><input type="text" name="ncc_version" value=""></td></tr>
 		<tr><td>SPP Version</td><td><input type="text" name="spp_version" value=""></td></tr>
 		<tr><td>NX Firmware</td><td><input type="text" name="nx_firmware" value=""></td></tr>
 		<tr><td>LCM Site</td><td><input type="text" name="lcm_site" value=""></td></tr>
 		<tr><td>Storage Replication Factor</td><td><input type="text" name="storage_repl_facotr" value=""></td></tr>
 		<tr><td>Compression Setting</td><td><input type="text" name="compression_setting" value=""></td></tr>
 		<tr><td>Erasure Coding</td><td><input type="text" name="eraure_coding" value=""></td></tr>
 		<tr><td>Deduplication</td><td><input type="text" name="deduplication" value=""></td></tr>
 		<tr><td>Reserve Compression Settings</td><td><input type="text" name="reserver_comp_setting" value=""></td></tr>
 		<tr><td>DNS Server 1</td><td><input type="text" name="dns_server1" value=""></td></tr>
 		<tr><td>DNS Server 2</td><td><input type="text" name="dns_server2" value=""></td></tr>
 		<tr><td>NTP Server 1</td><td><input type="text" name="ntp_server1" value=""></td></tr>
 		<tr><td>NTP Server 2</td><td><input type="text" name="ntp_sercer2" value=""></td></tr>
 		<tr><td>NTP Server 3</td><td><input type="text" name="ntp_server3" value=""></td></tr>
 		<tr><td>Proxy Address</td><td><input type="text" name="proxy_addr" value=""></td></tr>
 		<tr><td>Proxy Port</td><td><input type="text" name="proxy_port" value=""></td></tr>
 		<tr><td>Proxy Username</td><td><input type="text" name="proxy_user" value=""></td></tr>
 		<tr><td>Proxy Password</td><td><input type="text" name="proxy_password" value=""></td></tr>
 		<tr><td>Proxy Protocol</td><td><input type="text" name="proxy_protocol" value=""></td></tr>
 		<tr><td>Authentication Name</td><td><input type="text" name="auth_name" value=""></td></tr>
 		<tr><td>Authentication Domain</td><td><input type="text" name="auth_domain" value=""></td></tr>
 		<tr><td>Authentication URL</td><td><input type="text" name="auth_url" value=""></td></tr>
 		<tr><td>Authentication Service Account</td><td><input type="text" name="auth_serv_account" value=""></td></tr>
 		<tr><td>Authentication Service Account Password</td><td><input type="text" name="auth_serv_acc_password" value=""></td></tr>
 		<tr><td>Local Username</td><td><input type="text" name="local_username" value=""></td></tr>
 		<tr><td>Local Username First Name</td><td><input type="text" name="local_fname" value=""></td></tr>
 		<tr><td>Local Username Last Name</td><td><input type="text" name="local_lname" value=""></td></tr>
 		<tr><td>Local Username Email</td><td><input type="text" name="local_email" value=""></td></tr>
 		<tr><td>Local Username Password</td><td><input type="text" name="local_password" value=""></td></tr>
 		<tr><td>Local Username Roles</td><td><input type="text" name="local_roles" value=""></td></tr>
 		<tr><td>Language</td><td><input type="text" name="language" value=""></td></tr>
 		<tr><td>Password Hypervisor</td><td><input type="text" name="hypervisor_password" value=""></td></tr>
 		<tr><td>Password CVM</td><td><input type="text" name="cvm_password" value=""></td></tr>
 		<tr><td>Password IPMI</td><td><input type="text" name="ipmi_password" value=""></td></tr>
 		<tr><td>Password ADMIN</td><td><input type="text" name="admin_password" value=""></td></tr>
 		<tr><td>Password Nutanix</td><td><input type="text" name="nutanix_password" value=""></td></tr>
 		<tr><td>VMWARE.ClusterName</td><td><input type="text" name="vm_cluster_name" value=""></td></tr>
 		<tr><td>VMWARE.HA</td><td><input type="text" name="vm_ha" value=""></td></tr>
 		<tr><td>VMWARE.DRS</td><td><input type="text" name="vm_drs" value=""></td></tr>
 		<tr><td>VMWARE.ESXi Version</td><td><input type="text" name="vm_esxi_version" value=""></td></tr>
 		<tr><td>VMWARE.ESXi Patch Level</td><td><input type="text" name="vm_esxi_plevel" value=""></td></tr>
 		<tr><td>VMWARE.DNS Server 1</td><td><input type="text" name="vm_dns_server1" value=""></td></tr>
 		<tr><td>VMWARE.DNS Server 2</td><td><input type="text" name="vm_dns_server2" value=""></td></tr>
 		<tr><td>VMWARE.NTP Server 1</td><td><input type="text" name="vm_ntp_server1" value=""></td></tr>
 		<tr><td>VMWARE.NTP Server 2</td><td><input type="text" name="vm_ntp_server2" value=""></td></tr>
 		<tr><td>VMWARE.NTP Server 3</td><td><input type="text" name="vm_ntp_server3" value=""></td></tr>
 		<tr><td>VMWARE.DRS.VM.AutomationLevel</td><td><input type="text" name="vm_ntp_server3" value=""></td></tr>
 		<tr><td>VMWARE.DRS.VM.Restart Priority</td><td><input type="text" name="vm_restart_priority" value=""></td></tr>
 		<tr><td>VMWARE.DRS.VM.StartNextPriorityVMs</td><td><input type="text" name="vm_start_next_prio" value=""></td></tr>
 		<tr><td>VMWARE.PublicPortGroupName</td><td><input type="text" name="vm_port_group_name" value=""></td></tr>
 		<tr><td>VMWARE.PublicPortGroupNetwork</td><td><input type="text" name="vm_port_group_net" value=""></td></tr>
 		<tr><td>VMWARE.vmotionVMK</td><td><input type="text" name="vm_vmotion" value=""></td></tr>
 		<tr><td>VMWARE.vmotionPortGroupName</td><td><input type="text" name="vm_vmotion_port_name" value=""></td></tr>
 		<tr><td>VMWARE.vmotionPortGroupNetwork</td><td><input type="text" name="vm_vmotion_port_net" value=""></td></tr>
 		<tr><td>AHV.PublicPortGroupName</td><td><input type="text" name="vm_vmotion_port_net" value=""></td></tr>
 		<tr><td>AHV.PublicVLANID</td><td><input type="text" name="ahv_vlan_ip" value=""></td></tr>
 		<tr><td>PrismCentral.IP</td><td><input type="text" name="prism_ip" value=""></td></tr>
 		<tr><td>PrismCentral.Username</td><td><input type="text" name="prism_user" value=""></td></tr>
 		
 		<tr><td>PrismCentral.Password</td><td><input type="text" name="prism_password" value=""></td></tr>
 		<tr><td>PrismElementSMTP.Name</td><td><input type="text" name="prism_smtp_name" value=""></td></tr>
 		<tr><td>PrismElementSMTP.Port</td><td><input type="text" name="prism_smtp_port" value=""></td></tr>
 		<tr><td>PrismElementSMTP.Address</td><td><input type="text" name="prism_smtp_addr" value=""></td></tr>
 		<tr><td>PrismElementSMTP.SecurityMode</td><td><input type="text" name="prism_smtp_smode" value=""></td></tr>
 		
 		<tr><td></td><td></td></tr>
 		<tr><td></td><td><button type="submit">Submit</button></td></tr>
 		
 	</table>
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/buildbook_action.php".</p>
