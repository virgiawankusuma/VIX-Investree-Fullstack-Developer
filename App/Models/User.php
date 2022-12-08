<?php

namespace App\Models;

class User {

  public function all() {
    return [
      'users' => [
        ['id' => 0, 'name' => 'John Doe'],
        ['id' => 1, 'name' => 'John Smith']
      ]
    ];
  }

}