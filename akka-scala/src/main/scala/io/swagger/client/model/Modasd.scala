/**
 * Simple Inventory API
 * This is a simple API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: jhonbustamante011501@gmail.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */
package io.swagger.client.model

import io.swagger.client.core.ApiModel
import org.joda.time.DateTime
import java.util.UUID

case class Modasd (
  statusCode: Option[String] = None,
  messageId: Option[String] = None,
  message: Option[String] = None,
  data: Option[Seq[ModasdData]] = None
) extends ApiModel


