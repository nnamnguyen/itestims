<?php

    function GUID()
    {
        if (function_exists('com_create_guid') === true)
        {
            return trim(com_create_guid(), '{}');
        }
        return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
    }
    $idContact = strtolower(GUID());
    $idAccount = strtolower(GUID());
    $idLead = strtolower(GUID());
    $idAccountContact = strtolower(GUID());
    $idEmailAddress = strtolower(GUID());
    $idEmailAddressBeanRel1 = strtolower(GUID());
    $idEmailAddressBeanRel2 = strtolower(GUID()); 
    $idEmailAddressBeanRel3 = strtolower(GUID()); 
    $ho = $_POST['ho'];
    $ten = $_POST['ten'];
    $sdt = $_POST['sdt'];
    $email = $_POST['email'];
    $email_caps = strtoupper($email);
    $chucvu = $_POST['chucvu'];
    $tentruong = $_POST['tentruong'];
    $loaihinhtrungtam = $_POST['loaihinhtrungtam'];
    $khuvuc = $_POST['khuvuc'];
    $quymo = $_POST['quymo'];
    $website = $_POST['website'];
    $noidung = $_POST['noidung'];
    $status = 'Converted';
    $lead_source = 'Website';
    $converted = '0';
    //connect database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "new_ims_data";
    $conn = new mysqli($servername, $username, $password, $db);
    $conn->set_charset("utf8");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // $sqlEmailAddressBeanRelContact = "INSERT INTO email_addr_bean_rel (id, email_address_id, bean_id, bean_module, primary_address, deleted)
    //     VALUES ('$idEmailAddressBeanRel1', '$idEmailAddress', '$idContact', 'Contacts', '1', '0')";
    // $sqlEmailAddressBeanRelAccount = "INSERT INTO email_addr_bean_rel (id, email_address_id, bean_id, bean_module, primary_address, deleted)
    //     VALUES ('$idEmailAddressBeanRel2', '$idEmailAddress', '$idAccount', 'Accounts', '1'', '0')";
    // echo $sqlEmailAddressBeanRelContact."vaaaaaaaaaaa".$sqlEmailAddressBeanRelAccount;
    // return;
    //Insert database for Contacts
    $sqlContact = "INSERT INTO contacts (id, job_title, primary_address_city, phone_mobile, first_name, last_name, description, lead_source)
    VALUES ('$idContact', '$chucvu', '$khuvuc', '$sdt', '$ten', '$ho', '$noidung', '$lead_source')";
    //Insert database for Accounts
    $sqlAccount = "INSERT INTO accounts (id, description, name, institution_type, status, size_of_company, billing_address_city, shipping_address_city)
    VALUES ('$idAccount', '$noidung', '$tentruong', '$loaihinhtrungtam', 'New', '$quymo', '$khuvuc', '$khuvuc')";
    //Excute Query
    if ($conn->query($sqlContact) === true && $conn->query($sqlAccount) === true) {
        //Insert database for Leads
        $sqlLead = "INSERT INTO leads (id, website, job_title, size_of_company, primary_address_city, status, phone_mobile, first_name, last_name, description, lead_source, account_name, institution_type, contact_id, account_id)
        VALUES ('$idLead', '$website', '$chucvu', '$quymo', '$khuvuc', '$status', '$sdt', '$ten', '$ho', '$noidung', '$lead_source', '$tentruong', '$loaihinhtrungtam', '$idContact', '$idAccount')";
        //Insert table accounts_contacts
        $sqlAccountContact = "INSERT INTO accounts_contacts (id, contact_id, account_id, primary_account)
        VALUES ('$idAccountContact', '$idContact', '$idAccount', '1')";
        if ($conn->query($sqlLead) === true && $conn->query($sqlAccountContact) === true) {
            //Insert data for table email_addresses
            $sqlEmailAddress = "INSERT INTO email_addresses (id, email_address, email_address_caps)
            VALUES ('$idEmailAddress', '$email', '$email_caps')";
            if ($conn->query($sqlEmailAddress) === true) {
                //Insert data for table email_addr_bean_rel: module Contacts
                $sqlEmailAddressBeanRelContact = "INSERT INTO email_addr_bean_rel (id, email_address_id, bean_id, bean_module, primary_address, deleted)
                VALUES ('$idEmailAddressBeanRel1', '$idEmailAddress', '$idContact', 'Contacts', '1', '0')";
                //Insert data for table email_addr_bean_rel: module Accounts
                $sqlEmailAddressBeanRelAccount = "INSERT INTO email_addr_bean_rel (id, email_address_id, bean_id, bean_module, primary_address, deleted)
                VALUES ('$idEmailAddressBeanRel2', '$idEmailAddress', '$idAccount', 'Accounts', '1', '0')";
                //Insert data for table email_addr_bean_rel: module Leads
                $sqlEmailAddressBeanRelLead = "INSERT INTO email_addr_bean_rel (id, email_address_id, bean_id, bean_module, primary_address, deleted)
                VALUES ('$idEmailAddressBeanRel3', '$idEmailAddress', '$idLead', 'Leads', '1', '0')";
                if($conn->query($sqlEmailAddressBeanRelContact) === true && $conn->query($sqlEmailAddressBeanRelAccount) === true && $conn->query($sqlEmailAddressBeanRelLead) === true){
                    echo 'Tạo thanh công Leads, Contacts, Accounts, Email Address';
                }
            } else {
                echo 'Lỗi tạo Email Address';
            }
        } else {
            echo 'Lỗi tạo Leads';
        }
    } else {
        // echo $conn->error;
        echo 'Lỗi tại Contacts và Accounts';
    }
    $conn->close();
