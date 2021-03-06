<?php
/**
 * Created by PhpStorm.
 * User: air
 * Date: 22.03.2020
 * Time: 00:53
 */

namespace App\Http\Controllers\Web;


use App\Http\Controllers\WebBaseController;
use App\Http\Requests\LessonControllerRequests\StoreOrUpdateLessonRequest;
use App\Models\Education\Course;
use App\Models\Education\Lesson;
use App\Models\Education\Quiz;
use App\Services\FileService;

class LessonController extends WebBaseController
{

    protected $fileService;

    /**
     * LessonController constructor.
     * @param $fileService
     */
    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }


    public function index($course_id)
    {
        $course = Course::findOrFail($course_id);
        $quiz = $course->quiz;
        if (!$quiz) {
            $quiz = new Quiz();
        }
        $lessons = Lesson::where('course_id', $course_id)->paginate(5);
        return view('admin.main.lessons.index', compact('lessons', 'course', 'quiz'));
    }

    public function create($course_id)
    {
        $course = Course::findOrFail($course_id);
        $lesson = new Lesson();
        return view('admin.main.lessons.create', compact('lesson', 'course'));
    }

    public function edit($id)
    {
        $lesson = Lesson::findOrFail($id);
        return view('admin.main.lessons.edit', compact('lesson'));
    }

    public function store($course_id, StoreOrUpdateLessonRequest $request)
    {
        $course = Course::findOrFail($course_id);
        $lesson = new Lesson();
        $lesson->fill($request->all());
        $lesson->course_id = $course_id;
        $lesson->save();
        $this->added();
        return redirect()->back();
    }

    public function update($id, StoreOrUpdateLessonRequest $request)
    {
        $lesson = Lesson::findOrFail($id);
        $lesson->fill($request->all());
        $lesson->save();
        $this->edited();
        return redirect()->back();
    }

    public function delete($id)
    {
        $lesson = Lesson::findOrFail($id);
        $lesson->delete();
        return redirect()->back();
    }

    public function pass($courseId, $lessonId = null)
    {
        $lessons = Lesson::where('course_id', $courseId)->with('course')->orderBy('id', 'ASC')->get();
        $currentLesson = null;
        if ($lessonId) {
            $currentLesson = Lesson::with('course')->where('course_id', $courseId)->where('id', $lessonId)->first();
        } else if ($lessons->first()) {
            $currentLesson = $lessons->first();
        }

        if (!$currentLesson) {
            $this->notFound();
            return redirect()->back();
        }
        return view('admin.main.lessons.pass', compact('lessons', 'currentLesson'));
    }
}