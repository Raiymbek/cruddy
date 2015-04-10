<?php

use Kalnoy\Cruddy\Schema\BaseSchema;
use Kalnoy\Cruddy\Service\Validation\FluentValidator;

class CrudSchema extends BaseSchema {

    protected $model = 'Crud';

    /**
     * The name of the column that is used to convert a model to a string.
     *
     * @var string
     */
    protected $titleAttribute = null;

    /**
     * The name of the column that will sort data by default.
     *
     * @var string
     */
    protected $defaultOrder = null;

    /**
     * Define some fields.
     *
     * @param \Kalnoy\Cruddy\Schema\Fields\InstanceFactory $schema
     */
    public function fields($schema)
    {
		$schema->increments('id');

		$schema->string('title')->required();

		// Use ACE to edit body as markdown
		$schema->markdown('body')->required();

		$schema->boolean('active');

		$schema->timestamps();
    }

    /**
     * Define some columns.
     *
     * @param \Kalnoy\Cruddy\Schema\Columns\InstanceFactory $schema
     */
    public function columns($schema)
    {
		$schema->col('id');
		$schema->col('title');
		$schema->col('active');
		$schema->col('updated_at')->orderDirection('desc');
    }

    /**
     * Define some files to upload.
     *
     * @param \Kalnoy\Cruddy\Repo\Stub $repo
     */
    public function files($repo)
    {

    }

    /**
     * Define validation rules.
     *
     * @param \Kalnoy\Cruddy\Service\Validation\FluentValidator $v
     */
    public function rules($v)
    {
        $v->always(
        [

        ]);
    }
}