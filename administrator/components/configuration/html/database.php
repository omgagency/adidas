<table>
   <tr>
        <td style="width:230px;"><span class="asterisk">*</span><?php echo @$language->host ?></td>
        <td><input type="text" class="required" title=" " name="host" value="<?php echo $cuppa->configuration->host ?>" /></td>
    </tr>
    <tr>
        <td><span class="asterisk">*</span><?php echo @$language->database_name ?></td>
        <td><input type="text" class="required" title=" " name="db" value="<?php echo $cuppa->configuration->db ?>" /></td>
    </tr>
    <tr>
        <td><span class="asterisk">*</span><?php echo @$language->user ?></td>
        <td><input type="text"class="required" title=" " name="user" value="<?php echo $cuppa->configuration->user ?>" /></td>
    </tr>
    <tr>
        <td><?php echo @$language->password ?></td>
        <td><input type="password" name="password" value="<?php echo $cuppa->configuration->password ?>" /></td>
    </tr>
    <tr>
        <td><?php echo @$language->database_tables_prefix ?></td>
        <td><input type="text" name="table_prefix" value="<?php echo $cuppa->configuration->table_prefix ?>" /></td>
    </tr>                   
</table>