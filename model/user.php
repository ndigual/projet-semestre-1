<?php 
function addUser(array $user) {
    $users = get_file_content();
    if (!isset($users)) {
        $users = [];
    }

    array_push($users, $user);
    ajouter_fichier($users);
}

function get_list_user() {
    $users = get_file_content();
    if (!isset($users)) {
        $users = [];
    }

    return $users;
}

function get_user_by_id(int $id) {
    $users = get_list_user();
    foreach ($users as $key => $value) {
        if($value['id'] == $id) {
            return $value;
        }
    }
}

function get_file_content() {
    $json = file_get_contents(ROUTE_DIR.'data/user.data.json');
    return json_decode($json, true);
}

function ajouter_fichier(array $array) {
    $json = json_encode($array);
    file_put_contents(ROUTE_DIR.'data/user.data.json', $json);
}


function login_password_exist($login, $password) {
    $users = get_file_content();

    foreach ($users as $key => $value) {
        if ($value['email'] == $login && $value['password'] == $password) {
            return $value;
        }
    }

    return null;
}
?>