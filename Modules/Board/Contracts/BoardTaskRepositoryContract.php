<?php
namespace Plenty\Modules\Board\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Board\Exceptions\WrongBoardColumnReferenceException;
use Plenty\Modules\Board\Exceptions\WrongBoardReferenceException;
use Plenty\Modules\Board\Models\BoardTask;
use Plenty\Modules\Board\Models\BoardTaskReference;

/**
 * The BoardTaskRepositoryContract is the interface for the board task repository. This interface provides methods to access, create, update or delete tasks.
 */
interface BoardTaskRepositoryContract 
{

	/**
	 * Lists tasks for a specific column. Will return at most 20 tasks starting at defined task.
	 */
	public function list(
		string $columnId, 
		int $startAt = 0, 
		int $tasksPerPage = 20, 
		array $columns = []
	):Collection;

	/**
	 * Creates a new task and assigns it to a specified column.
	 */
	public function create(
		string $boardId, 
		string $columnId, 
		array $data
	):BoardTask;

	/**
	 * Copies the task with all references.
	 */
	public function copy(
		string $boardId, 
		string $columnId, 
		string $taskId
	):BoardTask;

	/**
	 * Returns a task for a given ID.
	 */
	public function get(
		string $taskId
	):BoardTask;

	/**
	 * Updates a specified task.
	 */
	public function update(
		string $boardId, 
		string $columnId, 
		string $taskId, 
		array $data
	):BoardTask;

	/**
	 * Adds a task reference to a task object.
	 */
	public function addReference(
		BoardTaskReference $boardTaskReference
	):bool;

	/**
	 * Removes a task reference from a task object.
	 */
	public function removeReference(
		BoardTaskReference $boardTaskReference
	):bool;

	/**
	 * Updates the position of a specified task. Will also update the position of all following tasks in the same column.
	 */
	public function updatePosition(
		string $taskId, 
		string $newColumnId, 
		int $newPosition
	):int;

	/**
	 * Deletes a specified task.
	 */
	public function delete(
		string $taskId
	):bool;

	/**
	 * Deletes all tasks of a column.
	 */
	public function deleteByColumn(
		string $boardId, 
		string $columnId
	):bool;

	/**
	 * Gets all tasks for the given column ID having a reference with the given reference value.
	 */
	public function allByColumnId(
		string $columnId, 
		string $referenceValue = null, 
		array $columns = []
	):array;

	/**
	 * Gets all tasks for the given column ID having a reference with the given reference value.
	 */
	public function allByBoardId(
		string $boardId, 
		string $referenceValue = null, 
		array $columns = []
	):array;

}