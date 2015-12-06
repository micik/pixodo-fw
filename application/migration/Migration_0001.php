<?php

class Migration_0001 extends Migration_Abstract
{
    public function up()
    {
        $this->createTable('users')
            ->column('id', self::PK)
            ->column('username', self::VARCHAR);
    }

    public function down()
    {
        $this->dropTable('users');
    }
}
