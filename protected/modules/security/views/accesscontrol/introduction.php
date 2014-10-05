<?php
/* @var $this AccesscontrolController */

$this->breadcrumbs=array(
	'Accesscontrol'=>array('/security/accesscontrol'),
	'Introduction',
);
?>

<h2>Access Control</h2>

<p><strong>Access control</strong> is a core concept in security that limits actons on objects to specific users. Access control can be applied to data objects like tables and columns as well as SQL objects such as views and stored procedures. Moreover, strong access control is the key to a strong, secure database.</p>

<p>Generally, access control is defined in three ways:</p>

<ol>
<li><strong>Mandatory Access Control (MAC)</strong></li>
<li><strong>Discretionary Access Control (DAC)</strong></li>
<li><strong>Role Based Access Control (RBAC)</strong></li>
</ol>

<p><strong>MAC rules</strong> are system applied, and considered static and secure. <strong>DAC rules</strong> are user supplied, and considered dynamic and content focused. With <strong>RBAC rules</strong>, various roles, or user groups, are defined, and users are assigned to a group. Then, access controls are applied to the user group rather than each user individually.</p>

<h2>Granting and revoking privileges</h2>

<p>Regardless of what kind of access control is being used, the SQL commands for <code>GRANT</code> and <code>REVOKE</code> define the access users have to the database.</p>

<p>These commands can modify permissions for either an individual user or an entire user group. The <code>GRANT</code> command is used to give access privileges to database objects.</p>

<pre><code>GRANT privilege_name ON object_name
TO {user_name | PUBLIC | role_name}
[WITH GRANT OPTION]
</code></pre>

<p>Conversely, the <code>REVOKE</code> command is used to remove access privileges to database objects.</p>

<pre><code>REVOKE privilege_name ON object_name
TO {user_name | PUBLIC | role_name}
</code></pre>
