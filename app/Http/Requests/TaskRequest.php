<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $task_task_unique = Rule::unique('task', 'user');
        if ($this->method() !== 'POST') {
            $task_task_unique->ignore($this->route()->parameter('id'));
        }
        return [
            'user' => ['required', $task_task_unique],
            'task' => ['required']
        ];
    }
    public function messages()
    {
        return [
            'required' => 'isian :attribute tidak boleh kosong',
            'user.required' => 'Nama Pengguna Tidak Boleh Kosong'
        ];
    }
}
