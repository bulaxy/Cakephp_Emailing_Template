<?php
/**
 * Created by PhpStorm.
 * User: Roger Dell XPS13
 * Date: 28/05/19
 * Time: 00:38
 */
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;

class EmailForm extends Form
{

    protected function _buildSchema(Schema $schema)
    {
        return $schema->addField('email', ['type' => 'string']);
    }

    protected function _buildValidator(Validator $validator)
    {
        $validator->add('email', 'format', [
            'rule' => 'email',
            'message' => 'A valid email address is required',
        ]);

        return $validator;
    }

    protected function _execute(array $data)
    {
        // Send an email.
        return true;
    }
}