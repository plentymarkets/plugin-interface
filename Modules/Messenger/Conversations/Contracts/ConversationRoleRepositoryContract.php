<?php
namespace Plenty\Modules\Messenger\Conversations\Contracts;

use Plenty\Modules\Account\Exceptions\CRMCritical;
use Plenty\Modules\Messenger\Conversations\Models\Roles\ConversationRole;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The ConversationRoleRepositoryContract is the interface for the messenger conversations roles.
 *     This interface defines methods to add, update, delete and show roles.
 */
interface ConversationRoleRepositoryContract 
{

	/**
	 * Get role details by role id
	 */
	public function getRoleById(
		int $roleId
	):ConversationRole;

	/**
	 * Get paginated results for roles
	 */
	public function listRoles(
		int $page = 1, 
		int $itemPerPage = 25, 
		string $sortBy = "id", 
		string $sortOrder = "asc", 
		array $filters = []
	):PaginatedResult;

	/**
	 * Update a role
	 */
	public function updateRole(
		int $roleId, 
		array $data
	):ConversationRole;

	/**
	 * Delete a role
	 */
	public function deleteRole(
		int $roleId
	):bool;

	/**
	 * Create new role
	 */
	public function createRole(
		array $data
	):ConversationRole;

	/**
	 * Deletes a batch of roles
	 */
	public function batchDeleteRoles(
		array $roleIds
	):bool;

}