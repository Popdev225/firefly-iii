<?php

namespace FireflyIII\Shared\Toolkit;

use Illuminate\Support\Collection;

/**
 * Class Form
 *
 * @package FireflyIII\Shared\Toolkit
 */
class Form
{
    /**
     * Takes any collection and tries to make a sensible select list compatible array of it.
     *
     * @param Collection $set
     * @param null       $titleField
     * @param bool       $addEmpty
     * @SuppressWarnings("CyclomaticComplexity")
     *
     * @return mixed
     */
    public function makeSelectList(Collection $set, $titleField = null, $addEmpty = false)
    {
        $selectList = [];
        if ($addEmpty) {
            $selectList[0] = '(none)';
        }
        $fields = ['title', 'name', 'description'];
        /** @var \Eloquent $entry */
        foreach ($set as $entry) {
            /** @noinspection PhpUndefinedFieldInspection */
            $id    = intval($entry->id);
            $title = $titleField;

            foreach ($fields as $field) {
                if (is_null($title) && isset($entry->$field)) {
                    $title = $entry->$field;
                }
            }
            $selectList[$id] = $title;
        }


        return $selectList;
    }
}