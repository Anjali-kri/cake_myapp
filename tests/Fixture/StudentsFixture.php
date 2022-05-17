<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StudentsFixture
 */
class StudentsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor ',
                'age' => 1,
                'country' => 'Lorem ipsum dolor sit amet',
                'created_at' => '2022-05-11 08:16:09',
                'updated_at' => '2022-05-11 08:16:09',
            ],
        ];
        parent::init();
    }
}
